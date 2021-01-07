<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class VideoFixtures
 * @package App\DataFixtures
 */
class VideoFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $video = new Video();
            $video->setAuthor("Auteur" . $count);
            $video->setPath("Path" . $count);
            $video->setEmbed("Embed" . $count);
            $video->setCreatedAt(new \DateTime("now"));
            $video->setUpdatedAt(new \DateTime("now"));
            $manager->persist($video);
        }
        $manager->flush();
    }
}
