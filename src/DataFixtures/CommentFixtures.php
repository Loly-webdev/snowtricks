<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class TricksFixtures
 * @package App\DataFixtures
 */
class CommentFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $comment = new Comment();
            $comment->setAuthor("Auteur " . $count);
            $comment->setContent("Content " . $count);
            $comment->setCreatedAt(new \DateTime("now"));
            $comment->setUpdatedAt(new \DateTime("now"));
            $manager->persist($comment);
        }
        $manager->flush();
    }
}
