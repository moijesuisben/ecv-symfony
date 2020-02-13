<?php

namespace App\DataFixtures;

use App\Entity\ProductList;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
//            $product->setName('product '.$i);
//            $product->setPrice(mt_rand(10, 100));
            $product -> setProduct('produit '.$i);
            $product -> setFamily(mt_rand(0,1));
            $product -> setType(mt_rand(0,1));
            $product -> setDateExpiration(rand( strtotime("Dec 20 2019"), strtotime("May 11 2030")));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
