<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::new()
            ->withAttributes([
                'email' => 'easyadmin@example.com',
                'plainPassword' => 'adminpass',
            ])
            ->promoteRole('ROLE_SUPER_ADMIN')
            ->create();

        $manager->flush();
    }
}
