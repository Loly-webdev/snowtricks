<?php

namespace App\DataFixtures;

use App\Entity\Tricks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class TricksFixtures
 * @package App\DataFixtures
 */
class TricksFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $trick = new Tricks();
            $trick->setTitle("Titre " . $count);
            $trick->setAuthor("Auteur " . $count);
            $trick->setContent("Content " . $count);
            $trick->setCreatedAt(new \DateTime("now"));
            $trick->setUpdatedAt(new \DateTime("now"));
            $manager->persist($trick);
        }
        $manager->flush();
    }
}
