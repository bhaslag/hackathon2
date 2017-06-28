<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Tag;

class LoadTagData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tag1 = new Tag();
        $tag1->setName('Pop');
        $manager->persist($tag1);
        $manager->flush();
        $this->addReference('tag1', $tag1);

        $tag2 = new Tag();
        $tag2->setName('Classic');
        $manager->persist($tag2);
        $manager->flush();
        $this->addReference('tag2', $tag2);

        $tag3 = new Tag();
        $tag3->setName('Rock');
        $manager->persist($tag3);
        $manager->flush();
        $this->addReference('tag3', $tag3);


        $tag4 = new Tag();
        $tag4->setName('Rap');
        $manager->persist($tag4);
        $manager->flush();
        $this->addReference('tag4', $tag4);


        $tag5 = new Tag();
        $tag5->setName('HipHop');
        $manager->persist($tag5);
        $manager->flush();
        $this->addReference('tag5', $tag5);


        $tag6 = new Tag();
        $tag6->setName('Soul');
        $manager->persist($tag6);
        $manager->flush();
        $this->addReference('tag6', $tag6);


        $tag7 = new Tag();
        $tag7->setName('Funk');
        $manager->persist($tag7);
        $manager->flush();
        $this->addReference('tag7', $tag7);


        $tag8 = new Tag();
        $tag8->setName('Alternative');
        $manager->persist($tag8);
        $manager->flush();
        $this->addReference('tag8', $tag8);


        $tag9 = new Tag();
        $tag9->setName('Folk');
        $manager->persist($tag9);
        $manager->flush();
        $this->addReference('tag9', $tag9);



        $tag10 = new Tag();
        $tag10->setName('Jazz');
        $manager->persist($tag10);
        $manager->flush();
        $this->addReference('tag10', $tag10);


        $tag11 = new Tag();
        $tag11->setName('Punk');
        $manager->persist($tag11);
        $manager->flush();
        $this->addReference('tag11', $tag11);


        $tag12 = new Tag();
        $tag12->setName('Metal');
        $manager->persist($tag12);
        $manager->flush();
        $this->addReference('tag12', $tag12);


        $tag13 = new Tag();
        $tag13->setName('Hardcore');
        $manager->persist($tag13);
        $manager->flush();


        $tag14 = new Tag();
        $tag14->setName('Ambient');
        $manager->persist($tag14);
        $manager->flush();

        $tag15 = new Tag();
        $tag15->setName('Electro');
        $manager->persist($tag15);
        $manager->flush();


        $tag16 = new Tag();
        $tag16->setName('Reggae');
        $manager->persist($tag16);
        $manager->flush();

        $tag17 = new Tag();
        $tag17->setName('Latino');
        $manager->persist($tag17);
        $manager->flush();

        $tag18 = new Tag();
        $tag18->setName('K-Pop');
        $manager->persist($tag18);
        $manager->flush();

        $tag19 = new Tag();
        $tag19->setName('J-Pop');
        $manager->persist($tag19);
        $manager->flush();

        $tag20 = new Tag();
        $tag20->setName('C-Pop');
        $manager->persist($tag20);
        $manager->flush();

        $tag21 = new Tag();
        $tag21->setName('Country');
        $manager->persist($tag21);
        $manager->flush();

        $tag22 = new Tag();
        $tag22->setName('Blues');
        $manager->persist($tag22);
        $manager->flush();

        $tag23 = new Tag();
        $tag23->setName('Indie');
        $manager->persist($tag23);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}

