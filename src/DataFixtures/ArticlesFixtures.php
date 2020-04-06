<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use Faker;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = (new \Faker\Factory())::create();

        for ($i = 1;$i <= 10; $i++){
          $article = new Article();
          $article->setTitle($faker->sentence)
                  ->setContent($faker->text)
                  ->setStatus($faker->numberBetween(0,2))
                  ->setTrending($faker->boolean(50))
                  ->setPublished($faker->dateTime())
                  ->setCreated($faker->dateTime())
                  ->setCategoryId($faker->numberBetween(0, 10));

                $manager->persist($article);

        }

        $manager->flush();
    }
}
