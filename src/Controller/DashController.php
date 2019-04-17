<?php

namespace App\Controller;

use App\Entity\Employees;
use App\Entity\ProdTime;
use App\Entity\Projects;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashController extends AbstractController
{
  /**
   * @Route("/", name="home")
   */
  public function index()
  {
    $em = $this->getDoctrine()->getManager();
    $repository = $this->getDoctrine()->getRepository(Projects::class);
    $projects = $repository->findBy([], ['createdAt' => 'DESC'], 5);

    $queryCountCapex = $this->getDoctrine()->getRepository(Projects::class)->findBy([
      'type' => 'Capex',
    ]);
    $countCapex = count($queryCountCapex);

    $queryCountOpex = $this->getDoctrine()->getRepository(Projects::class)->findBy([
      'type' => 'Opex',
    ]);
    $countOpex = count($queryCountOpex);

    $totalCapexOpex = $countCapex + $countOpex;
    if($totalCapexOpex==0) $totalCapexOpex = 1;
    $ratioCapexOpex = ceil(($countCapex / $totalCapexOpex) * 100);

    $getSumProjectTime = $em->createQuery('SELECT SUM(p.time) FROM App\\Entity\\ProdTime p');
    $sumProjectTime = $getSumProjectTime->getResult();

    $getTopEmployee = $em->createQuery('SELECT p FROM App\\Entity\\ProdTime p ORDER BY p.cost DESC');
    $setTopEmployee = $getTopEmployee->setMaxResults(1);
    $topEmployee = $setTopEmployee->getResult();

    $getProdTime = $em->createQuery('SELECT p FROM App\\Entity\\ProdTime p ORDER BY p.createdAt DESC');
    $setProdTime = $getProdTime->setMaxResults(10);
    $prodTimes = $setProdTime->getResult();

    $query = $this->getDoctrine()->getRepository(Employees::class)->findAll();
    $employees = count($query);

    $queryProjectsDelivered = $this->getDoctrine()->getRepository(Projects::class)->findBy([
      'isDelivered' => true,
    ]);
    $projectsDelivered = count($queryProjectsDelivered);

    $queryProjectsNotDelivered = $this->getDoctrine()->getRepository(Projects::class)->findBy([
      'isDelivered' => false,
    ]);
    $projectsNotDelivered = count($queryProjectsNotDelivered);

    $sumProjectsDeliveredNotDelivered = $projectsDelivered + $projectsNotDelivered;
    if($sumProjectsDeliveredNotDelivered==0) $sumProjectsDeliveredNotDelivered = 1;
    $totalProjectsDelivered = ceil(($projectsDelivered / $sumProjectsDeliveredNotDelivered) * 100);

    return $this->render('dashboard/index.html.twig', [
      'projects' => $projects,
      'employees' => $employees,
      'sumProjectTime' => $sumProjectTime,
      'topEmployee' => $topEmployee,
      'prodTimes' => $prodTimes,
      'projectsDelivered' => $projectsDelivered,
      'projectsNotDelivered' => $projectsNotDelivered,
      'ratioCapexOpex' => $ratioCapexOpex,
      'totalProjectsDelivered' => $totalProjectsDelivered,
    ]);
  }

  /**
   * @Route("/search", name="search")
   */
  public function search(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $key = $request->query->get("search");
    $searchQuery = $em->createQuery('SELECT p FROM App\\Entity\\Projects p WHERE p.title LIKE :key OR p.description LIKE :key')
      ->setParameter('key', '%'.$key.'%');
    $searchResult = $searchQuery->getResult();

    return $this->render('dashboard/search.html.twig', [
      'searchResult' => $searchResult,
    ]);
  }
}
