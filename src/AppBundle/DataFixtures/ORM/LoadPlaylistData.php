<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Playlist;

class LoadPlaylistData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $playlist1 = new Playlist();
        $playlist1->setName('Pop');
        $playlist1->setDatecreated(new \DateTime('01-01-2017'));
        $playlist1->setPrivate(true);
        $manager->persist($playlist1);
        $manager->flush();

        $playlist2 = new Playlist();
        $playlist2->setName('Classic');
        $playlist2->setDatecreated(new \DateTime('01-01-2017'));
        $playlist2->setPrivate(true);
        $manager->persist($playlist2);
        $manager->flush();

        $playlist3 = new Playlist();
        $playlist3->setName('Rock');
        $playlist3->setDatecreated(new \DateTime('01-01-2017'));
        $playlist3->setPrivate(true);
        $manager->persist($playlist3);
        $manager->flush();
    }
}