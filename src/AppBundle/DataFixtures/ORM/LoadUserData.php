<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserDataData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setFirstname('Quiterie');
        $user1->setLastname('C');
        $user1->setUsername('awesome1');
        $user1->setPassword('quiterie');
        $manager->persist($user1);
        $manager->flush();

        $user2 = new User();
        $user2->setFirstname('Sacha');
        $user2->setLastname('J');
        $user2->setUsername('JSisbest');
        $user2->setPassword('sacha');
        $manager->persist($user2);
        $manager->flush();

        $user3 = new User();
        $user3->setFirstname('Bastien');
        $user3->setLastname('B');
        $user3->setUsername('Angular4Ever');
        $user3->setPassword('bastien');
        $manager->persist($user3);
        $manager->flush();
    }
}