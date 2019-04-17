<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Form\ProjectsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends Controller
{
  /**
   * @Route("/projects", name="projectsList")
   */
  public function projectsList(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository(Projects::class);
    $projects = $repository->findAll();

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
      $projects,
      $request->query->getInt('page', 1),
      10
    );


    return $this->render('projects/index.html.twig', [
      'projects' => $projects,
      'pagination' => $pagination,
    ]);
  }

  /**
   * @Route("/addProject", name="addProject")
   */
  public function addProject(Request $request)
  {
    $projects = new Projects();
    $form = $this->createForm(ProjectsType::class, $projects);

    $form->handleRequest($request);

    if($form->isSubmitted() and $form->isValid()){

      $em = $this->getDoctrine()->getManager();
      $em->persist($projects);
      $em->flush();

      $this->addFlash('success', 'Le <b>projet</b> a été ajouté avec succès !');
      return $this->redirectToRoute('projectsList');
    }

    return $this->render('projects/add.html.twig', [
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/removeProject/{id}", name="removeProject", requirements={"id" = "\d+"})
   */
  public function removeProject($id)
  {
    $em = $this->getDoctrine()->getManager();
    $project = $em->getRepository(Projects::class)->find($id);

    if($project->getIsDelivered() == true)
    {
      $this->addFlash('danger', 'Le <b>projet</b> a été livré et n\'est donc plus supprimable !');

      return $this->redirectToRoute('projectsList');
    }
    else
    {
      $em->remove($project);
      $em->flush();
      $this->addFlash('danger', 'Le <b>projet</b> a été supprimé avec succès !');
    }

    return $this->redirectToRoute('projectsList');
  }

  /**
   * @Route("/editProject/{id}", name="editProject", requirements={"id" = "\d+"})
   */
  public function editProject(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $project = $em->getRepository(Projects::class)->find($id);
    $form = $this->createForm(ProjectsType::class, $project);
    $form->handleRequest($request);

    if($project->getIsDelivered() == true)
    {
      $this->addFlash('danger', 'Le <b>projet</b> a été livré et n\'est donc plus modifiable !');

      return $this->redirectToRoute('projectsList');
    }
    else
    {
      if($form->isSubmitted() and $form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $this->addFlash('success', 'Le <b>projet</b> a été modifié avec succès !');

        return $this->redirectToRoute('projectsList');
      }
    }

    return $this->render('projects/edit.html.twig', [
      'project' => $project,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/deliverProject/{id}", name="deliverProject", requirements={"id" = "\d+"})
   */
  public function deliverProject(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $project = $em->getRepository(Projects::class)->find($id);
    $project->setIsDelivered(true);
    $em->flush();

    $this->addFlash('success', 'Le <b>projet</b> a été livré avec succès !');

    return $this->redirectToRoute('projectsList');
  }
}
