<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class CategoryFixtures
 * @package App\DataFixtures
 */
class CategoryFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($count = 0; $count < 20; $count++) {
            $category = new Category();
            $category->setName("Name " . $count);
            $category->setCreatedAt(new \DateTime("now"));
            $category->setUpdatedAt(new \DateTime("now"));
            $manager->persist($category);
        }
        $manager->flush();
    }
}
