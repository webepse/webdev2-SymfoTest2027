<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductsRepository $repo): Response
    {
       
        $products = $repo->findAll();
        dump($products);

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/product/{id}', name: "product_show")]
    public function show(int $id,  ProductsRepository $repo)
    {
    
        $product = $repo->find($id);
        return $this->render("product/show.html.twig", [
            'product' => $product
        ]);
    }

}
