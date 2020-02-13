<?php
namespace App\Controller;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProductApiController extends AbstractController
{
    /**
     * @Route("/api/product.{extension}", name="product_api")
     */
    public function getProduct($extension, SerializerInterface $serializer)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $data = $serializer->serialize($product, $extension,['groups' => 'api']);
        return new Response(
            $data,
            Response::HTTP_OK,
            ['content-type' => 'text/'.$extension]
        );
    }
}