<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Song;

class LoadSongData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $song1 = new Song();
        $song1->setTitle('Dig Down');
        $song1->setArtist('Muse');
        $song1->setDatecreated(new \DateTime('01-01-2017'));
        $song1->setUrl('https://www.youtube.com/watch?v=b4ozdiGys5g');
        $song1->addTag($this->getReference('tag1'));
        $song1->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song1);
        $this->getReference('tag2')->addSong($song1);
        $manager->persist($song1);
        $manager->flush();
        $this->addReference('song1', $song1);

        $song2 = new Song();
        $song2->setTitle('The Greatest');
        $song2->setArtist('Sia');
        $song2->setDatecreated(new \DateTime('01-01-2017'));
        $song2->setUrl('https://www.youtube.com/watch?v=GKSRyLdjsPA');
        $song2->addTag($this->getReference('tag1'));
        $song2->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song2);
        $this->getReference('tag2')->addSong($song2);
        $manager->persist($song2);
        $manager->flush();
        $this->addReference('song2', $song2);


        $song3 = new Song();
        $song3->setTitle('Come Get It Bae');
        $song3->setArtist('Pharrell Williams');
        $song3->setDatecreated(new \DateTime('01-01-2017'));
        $song3->setUrl('https://www.youtube.com/watch?v=UfGMj10wOzg');
        $song3->addTag($this->getReference('tag1'));
        $song3->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song3);
        $this->getReference('tag2')->addSong($song3);
        $manager->persist($song3);
        $manager->flush();
        $this->addReference('song3', $song3);


        $song4 = new Song();
        $song4->setTitle('L\'amour c\'est comme une cigarette');
        $song4->setArtist('Sylvie Vartan');
        $song4->setDatecreated(new \DateTime('01-01-2017'));
        $song4->setUrl('https://www.youtube.com/watch?v=az_IQLC8pyo');
        $song4->addTag($this->getReference('tag1'));
        $song4->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song4);
        $this->getReference('tag2')->addSong($song4);
        $manager->persist($song4);
        $manager->flush();
        $this->addReference('song4', $song4);


        $song5 = new Song();
        $song5->setTitle('Non, je ne regrette rien');
        $song5->setArtist('Edith Piaf');
        $song5->setDatecreated(new \DateTime('01-01-2017'));
        $song5->setUrl('https://www.youtube.com/watch?v=fFtGfyruroU');
        $song5->addTag($this->getReference('tag1'));
        $song5->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song5);
        $this->getReference('tag2')->addSong($song5);
        $manager->persist($song5);
        $manager->flush();
        $this->addReference('song5', $song5);


        $song6 = new Song();
        $song6->setTitle('Seul ce soir');
        $song6->setArtist('Leo Marjane & Brassai');
        $song6->setDatecreated(new \DateTime('01-01-2017'));
        $song6->setUrl('https://www.youtube.com/watch?v=via0kHcEV1A');
        $song6->addTag($this->getReference('tag1'));
        $song6->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song6);
        $this->getReference('tag2')->addSong($song6);
        $manager->persist($song6);
        $manager->flush();
        $this->addReference('song6', $song6);


        $song7 = new Song();
        $song7->setTitle('T.N.T');
        $song7->setArtist('AC/DC');
        $song7->setDatecreated(new \DateTime('01-01-2017'));
        $song7->setUrl('https://www.youtube.com/watch?v=kR6pxe8jaMs');
        $song7->addTag($this->getReference('tag1'));
        $song7->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song7);
        $this->getReference('tag2')->addSong($song7);
        $manager->persist($song7);
        $manager->flush();
        $this->addReference('song7', $song7);


        $song8 = new Song();
        $song8->setTitle('Duality');
        $song8->setArtist('Slipknot');
        $song8->setDatecreated(new \DateTime('01-01-2017'));
        $song8->setUrl('https://www.youtube.com/watch?v=6fVE8kSM43I');
        $song8->addTag($this->getReference('tag1'));
        $song8->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song8);
        $this->getReference('tag2')->addSong($song8);
        $manager->persist($song8);
        $manager->flush();
        $this->addReference('song8', $song8);


        $song9 = new Song();
        $song9->setTitle('Pistol Grip Pump');
        $song9->setArtist('Rage Against The Machine');
        $song9->setDatecreated(new \DateTime('01-01-2017'));
        $song9->setUrl('https://www.youtube.com/watch?v=Y5dQOYe6yRY');
        $song9->addTag($this->getReference('tag1'));
        $song9->addTag($this->getReference('tag2'));
        $this->getReference('tag1')->addSong($song9);
        $this->getReference('tag2')->addSong($song9);
        $manager->persist($song9);
        $manager->flush();
        $this->addReference('song9', $song9);
    }

    public function getOrder()
    {
        return 3;
    }
}