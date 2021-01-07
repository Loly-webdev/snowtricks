<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class UserFixtures
 * @package App\DataFixtures
 */
class UserFixtures extends Fixture
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $user = new User();
            $user->setEmail("email@" . $count);
            $user->setPassword("Pass" . $count);
            $user->setLogin("Login" . $count);
            $user->setAvatar("Path avatar" . $count);
            $user->setCreatedAt(new \DateTime("now"));
            $user->setUpdatedAt(new \DateTime("now"));
            $manager->persist($user);
        }
        $manager->flush();
    }
}
