<?php

namespace App\Controller;



use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    #[Route('/produit/list', name: 'produit_list')]
    public function list(ProduitRepository $repo): Response
    {
        $produits = $repo->findAll();

        return $this->render('produit/list.html.twig', [
            'produits' => $produits,
        ]);
    }

}
