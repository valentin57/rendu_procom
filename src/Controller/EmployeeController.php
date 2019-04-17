<?php

namespace App\Controller;

use App\Entity\Employees;
use App\Entity\ProdTime;
use App\Entity\Projects;
use App\Form\AddTimeType;
use App\Form\EmployeesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends Controller
{
  /**
   * @Route("/employees", name="employeesList")
   */
  public function index(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository(Employees::class);
    $employees = $repository->findAll();

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
      $employees,
      $request->query->getInt('page', 1),
      10
    );

    return $this->render('employees/index.html.twig', [
      'employees' => $employees,
      'pagination' => $pagination,
    ]);
  }

  /**
   * @Route("/addEmployee", name="addEmployee")
   */
  public function addEmployee(Request $request)
  {
    $employees = new Employees();
    $form = $this->createForm(EmployeesType::class, $employees);

    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){

      $em = $this->getDoctrine()->getManager();
      $em->persist($employees);
      $em->flush();

      $this->addFlash('success', 'L\'<b>employé</b> a été ajouté avec succès !');
      return $this->redirectToRoute('employeesList');
    }

    return $this->render('employees/add.html.twig', [
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/archiveEmployee/{id}", name="archiveEmployee", requirements={"id" = "\d+"})
   */
  public function archiveEmployee($id)
  {
    $em = $this->getDoctrine()->getManager();
    $employee = $em->getRepository(Employees::class)->find($id);
    $employee->setIsArchived(true);

    $em->flush();
    $this->addFlash('danger', 'L\'<b>employé</b> a été archivé avec succès !');

    return $this->redirectToRoute('employeesList');
  }

  /**
   * @Route("/editEmployee/{id}", name="editEmployee", requirements={"id" = "\d+"})
   */
  public function editEmployee(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $employee = $em->getRepository(Employees::class)->find($id);
    $form = $this->createForm(EmployeesType::class, $employee);
    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      $this->addFlash('warning', 'L\'<b>employé</b> a été modifié avec succès !');

      return $this->redirectToRoute('employeesList');
    }

    return $this->render('employees/edit.html.twig', [
      'employee' => $employee,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/viewEmployee/{id}", name="viewEmployee", requirements={"id" = "\d+"})
   */
  public function viewEmployee(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $employee = $em->getRepository(Employees::class)->find($id);

    $getProdTimes = $em->createQuery('SELECT pt FROM App\\Entity\\ProdTime pt WHERE pt.employee = '.$id.'ORDER BY pt.createdAt desc');
    $prodTimes = $getProdTimes->getResult();

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
      $prodTimes,
      $request->query->getInt('page', 1),
      10
    );

    $prodTime = new ProdTime();

    $form = $this->createForm(AddTimeType::class, $prodTime);
    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){
      $getPost = $request->request->get('add_time');
      $projectId = $getPost['project'];
      $project = $em->getRepository(Projects::class)->find($projectId);

      if($project->getIsDelivered() == true)
      {
        $this->addFlash('danger', 'Le <b>projet</b> choisi est déjà livré !');

        return $this->redirectToRoute('viewEmployee', [
          'id' => $id
        ]);
      }
      else
      {
        $time = $getPost['time'];
        $cost = $time*$employee->getDailyCost();
        $prodTime->setCost($cost);

        $em = $this->getDoctrine()->getManager();
        $prodTime->setEmployee($employee);
        $em->persist($prodTime);
        $em->flush();
        $this->addFlash('success', 'Le <b>temps de production</b> a été ajouté avec succès !');

        return $this->redirectToRoute('viewEmployee', [
          'id' => $id
        ]);
      }
    }

    return $this->render('employees/view.html.twig', [
      'employee' => $employee,
      'pagination' => $pagination,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/removeProdTime/{id}", name="removeProdTime", requirements={"id" = "\d+"})
   */
  public function removeProdTime($id)
  {
    $em = $this->getDoctrine()->getManager();
    $prodTime = $em->getRepository(ProdTime::class)->find($id);
    $project = $em->getRepository(Projects::class)->find($prodTime->getProject()->getId());

    if($project->getIsDelivered() == true)
    {
      $this->addFlash('warning', 'Le <b>temps de production</b> ne peut être supprimé car le projet est livré !');

      return $this->redirectToRoute('viewEmployee', [
        'id' => $prodTime->getEmployee()->getId()
      ]);
    }
    else
    {
      $em->remove($prodTime);
      $em->flush();
      $this->addFlash('danger', 'Le <b>temps de production</b> a été supprimé avec succès !');

      return $this->redirectToRoute('viewEmployee', [
        'id' => $prodTime->getEmployee()->getId()
      ]);
    }
  }
}
