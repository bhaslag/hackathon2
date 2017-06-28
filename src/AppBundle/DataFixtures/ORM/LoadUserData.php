<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setFirstname('Quiterie');
        $user1->setLastname('C');
        $user1->setUsername('awesome1');
        $user1->setPassword('quiterie');
        $user1->setEmail('quiterie@test.com');
        $user1->addPlaylist($this->getReference('playlist1'));
        $this->getReference('playlist1')->setUser($user1);
        $manager->persist($user1);
        $manager->flush();

        $user2 = new User();
        $user2->setFirstname('Sacha');
        $user2->setLastname('J');
        $user2->setUsername('JSisBest');
        $user2->setPassword('sacha');
        $user2->setEmail('sacha@test.com');
        $user1->addPlaylist($this->getReference('playlist2'));
        $this->getReference('playlist2')->setUser($user2);
        $manager->persist($user2);
        $manager->flush();

        $user3 = new User();
        $user3->setFirstname('Bastien');
        $user3->setLastname('B');
        $user3->setUsername('Angular4Ever');
        $user3->setPassword('bastien');
        $user3->setEmail('bastien@test.com');
        $user1->addPlaylist($this->getReference('playlist3'));
        $this->getReference('playlist3')->setUser($user3);
        $manager->persist($user3);
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}