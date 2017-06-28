<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Song;

class LoadSongData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $song1 = new Song();
        $song1->setTitle('Dig Down');
        $song1->setArtist('Muse');
        $song1->setDatecreated(new \DateTime('01-01-2017'));
        $song1->setUrl('https://www.youtube.com/watch?v=b4ozdiGys5g');
        $manager->persist($song1);
        $manager->flush();

        $song2 = new Song();
        $song2->setTitle('The Greatest');
        $song2->setArtist('Sia');
        $song2->setDatecreated(new \DateTime('01-01-2017'));
        $song2->setUrl('https://www.youtube.com/watch?v=GKSRyLdjsPA');
        $manager->persist($song2);
        $manager->flush();

        $song3 = new Song();
        $song3->setTitle('Come Get It Bae');
        $song3->setArtist('Pharrell Williams');
        $song3->setDatecreated(new \DateTime('01-01-2017'));
        $song3->setUrl('https://www.youtube.com/watch?v=UfGMj10wOzg');
        $manager->persist($song3);
        $manager->flush();

        $song4 = new Song();
        $song4->setTitle('L\'amour c\'est comme une cigarette');
        $song4->setArtist('Sylvie Vartan');
        $song4->setDatecreated(new \DateTime('01-01-2017'));
        $song4->setUrl('https://www.youtube.com/watch?v=az_IQLC8pyo');
        $manager->persist($song4);
        $manager->flush();

        $song5 = new Song();
        $song5->setTitle('Non, je ne regrette rien');
        $song5->setArtist('Edith Piaf');
        $song5->setDatecreated(new \DateTime('01-01-2017'));
        $song5->setUrl('https://www.youtube.com/watch?v=fFtGfyruroU');
        $manager->persist($song5);
        $manager->flush();

        $song6 = new Song();
        $song6->setTitle('Seul ce soir');
        $song6->setArtist('Leo Marjane & Brassai');
        $song6->setDatecreated(new \DateTime('01-01-2017'));
        $song6->setUrl('https://www.youtube.com/watch?v=via0kHcEV1A');
        $manager->persist($song6);
        $manager->flush();

        $song7 = new Song();
        $song7->setTitle('T.N.T');
        $song7->setArtist('AC/DC');
        $song7->setDatecreated(new \DateTime('01-01-2017'));
        $song7->setUrl('https://www.youtube.com/watch?v=kR6pxe8jaMs');
        $manager->persist($song7);
        $manager->flush();

        $song8 = new Song();
        $song8->setTitle('Duality');
        $song8->setArtist('Slipknot');
        $song8->setDatecreated(new \DateTime('01-01-2017'));
        $song8->setUrl('https://www.youtube.com/watch?v=6fVE8kSM43I');
        $manager->persist($song8);
        $manager->flush();

        $song9 = new Song();
        $song9->setTitle('Pistol Grip Pump');
        $song9->setArtist('Rage Against The Machine');
        $song9->setDatecreated(new \DateTime('01-01-2017'));
        $song9->setUrl('https://www.youtube.com/watch?v=Y5dQOYe6yRY');
        $manager->persist($song9);
        $manager->flush();
    }
}