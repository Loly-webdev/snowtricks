<?php

namespace App\DataFixtures;

use App\Entity\Tricks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class AppFixtures
 * @package App\DataFixtures
 */
class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $article = new Tricks();
            $article->setTitle("Titre " . $count);
            $article->setAuthor("Auteur " . $count);
            $article->setContent("Content " . $count);
            $article->setCategoryId("Category " . $count);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
