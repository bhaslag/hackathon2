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
        $playlist1->addSong($this->getReference('song3'));
        $this->getReference('song1')->setPlaylist($playlist1);
        $this->getReference('song2')->setPlaylist($playlist1);
        $this->getReference('song3')->setPlaylist($playlist1);
        $playlist1->addCategory($this->getReference('category1'));
        $this->getReference('category1')->addPlaylist($playlist1);
        $manager->persist($playlist1);
        $manager->flush();
        $this->addReference('playlist1', $playlist1);

        $playlist2 = new Playlist();
        $playlist2->setName('Classic');
        $playlist2->setDatecreated(new \DateTime('01-01-2017'));
        $playlist2->setPrivate(true);
        $playlist2->addSong($this->getReference('song4'));
        $playlist2->addSong($this->getReference('song5'));
        $playlist2->addSong($this->getReference('song6'));
        $this->getReference('song4')->setPlaylist($playlist2);
        $this->getReference('song5')->setPlaylist($playlist2);
        $this->getReference('song6')->setPlaylist($playlist2);
        $playlist1->addCategory($this->getReference('category2'));
        $this->getReference('category2')->addPlaylist($playlist2);
        $manager->persist($playlist2);
        $manager->flush();
        $this->addReference('playlist2', $playlist2);

        $playlist3 = new Playlist();
        $playlist3->setName('Rock');
        $playlist3->setDatecreated(new \DateTime('01-01-2017'));
        $playlist3->setPrivate(true);
        $playlist3->addSong($this->getReference('song7'));
        $playlist3->addSong($this->getReference('song8'));
        $playlist3->addSong($this->getReference('song9'));
        $this->getReference('song7')->setPlaylist($playlist3);
        $this->getReference('song8')->setPlaylist($playlist3);
        $this->getReference('song9')->setPlaylist($playlist3);
        $playlist1->addCategory($this->getReference('category3'));
        $this->getReference('category3')->addPlaylist($playlist3);
        $manager->persist($playlist3);
        $manager->flush();
        $this->addReference('playlist3', $playlist3);
    }

    public function getOrder()
    {
        return 4;
    }
}