<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i<=10; $i++){
            $prod = new Products();
            $date = new \DateTime();

            $prod->setTitle("Produit ".$i)
                ->setDate($date)
                ->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis id eos exercitationem quam, consequatur assumenda quod unde dolorum amet explicabo reiciendis eum consequuntur, suscipit distinctio vitae aliquam soluta autem saepe repellendus! Cumque unde itaque amet voluptatum incidunt illo repudiandae quisquam sapiente esse modi facere vero, dicta consectetur dolore minus.");
            $manager->persist($prod);
        }

        $manager->flush();
    }
}
