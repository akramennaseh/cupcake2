<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $generator = Faker\Factory::create("fr_FR");
        for($i =1;$i <=10;$i++){
            $genre = new Genre(); 
            
            $genre
            ->setName($generator->word());
            
            $manager->persist($genre);
            
            
            
            
        }

        $manager->flush();
    }
}
