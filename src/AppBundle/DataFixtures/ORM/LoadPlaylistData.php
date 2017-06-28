<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Playlist;

class LoadPlaylistData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $playlist1 = new Playlist();
        $playlist1->setName('Pop');
        $playlist1->setDatecreated(new \DateTime('01-01-2017'));
        $playlist1->setPrivate(true);
        $playlist1->addSong($this->getReference('song1'));
        $playlist1->addSong($this->getReference('song2'));
        $manager->persist($playlist1);
        $manager->flush();

        $playlist2 = new Playlist();
        $playlist2->setName('Classic');
        $playlist2->setDatecreated(new \DateTime('01-01-2017'));
        $playlist2->setPrivate(true);
        $playlist1->addSong($this->getReference('song3'));
        $playlist1->addSong($this->getReference('song4'));
        $manager->persist($playlist2);
        $manager->flush();

        $playlist3 = new Playlist();
        $playlist3->setName('Rock');
        $playlist3->setDatecreated(new \DateTime('01-01-2017'));
        $playlist3->setPrivate(true);
        $playlist1->addSong($this->getReference('song5'));
        $playlist1->addSong($this->getReference('song6'));
        $manager->persist($playlist3);
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}