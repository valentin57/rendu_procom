<?php

namespace App\Controller;

use App\Entity\Employees;
use App\Entity\Jobs;
use App\Form\JobsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WorksController extends Controller
{
  /**
   * @Route("/jobs", name="jobsList")
   */
  public function jobsList(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository(Jobs::class);
    $jobs = $repository->findAll();

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
      $jobs,
      $request->query->getInt('page', 1),
      10
    );

    return $this->render('jobs/index.html.twig', [
      'jobs' => $jobs,
      'pagination' => $pagination,
    ]);
  }

  /**
   * @Route("/addJob", name="addJob")
   */
  public function addJob(Request $request)
  {
    $jobs = new Jobs();
    $form = $this->createForm(JobsType::class, $jobs);

    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){

      $em = $this->getDoctrine()->getManager();
      $em->persist($jobs);
      $em->flush();

      $this->addFlash('success', 'Le <b>métier</b> a été ajouté avec succès !');
      return $this->redirectToRoute('jobsList');
    }

    return $this->render('jobs/add.html.twig', [
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/removeJob/{id}", name="removeJob", requirements={"id" = "\d+"})
   */
  public function removeJob($id)
  {
    $em = $this->getDoctrine()->getManager();
    $job = $em->getRepository(Jobs::class)->find($id);

    $employee = $em->getRepository(Employees::class)->findBy(
      ['job' => $id]
    );

    if(!empty($employee)){
      $this->addFlash('danger', 'Ce <b>métier</b> ne peut pas être supprimé car il est lié à un employé !');
    }
    else
    {
      $em->remove($job);
      $em->flush();
      $this->addFlash('danger', 'Le <b>métier</b> a été supprimé avec succès !');
    }

    return $this->redirectToRoute('jobsList');
  }

  /**
   * @Route("/editJob/{id}", name="editJob", requirements={"id" = "\d+"})
   */
  public function editJob(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $job = $em->getRepository(Jobs::class)->find($id);
    $form = $this->createForm(JobsType::class, $job);
    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      $this->addFlash('warning', 'Le <b>métier</b> a été modifié avec succès !');

      return $this->redirectToRoute('jobsList');
    }

    return $this->render('jobs/edit.html.twig', [
      'job' => $job,
      'form' => $form->createView(),
    ]);
  }
}
