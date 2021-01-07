<?php

namespace App\DataFixtures;

use App\Entity\Picture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class PictureFixtures
 * @package App\DataFixtures
 */
class PictureFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $picture = new Picture();
            $picture->setAuthor("Auteur" . $count);
            $picture->setPath("Path" . $count);
            $picture->setCreatedAt(new \DateTime("now"));
            $picture->setUpdatedAt(new \DateTime("now"));
            $manager->persist($picture);
        }
        $manager->flush();
    }
}
