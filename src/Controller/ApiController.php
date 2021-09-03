<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/wish", name="api_liste", methods={"GET"})
     */
    public function liste(WishRepository $repo): Response
    {
        $tab = $repo->findAll();
        return $this->json($tab);
    }
}
