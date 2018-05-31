<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Pop');
        $manager->persist($category1);
        $manager->flush();
        $this->addReference('category1', $category1);

        $category2 = new Category();
        $category2->setName('Classic');
        $manager->persist($category2);
        $manager->flush();
        $this->addReference('category2', $category2);

        $category3 = new Category();
        $category3->setName('Rock');
        $manager->persist($category3);
        $manager->flush();
        $this->addReference('category3', $category3);


        $category4 = new Category();
        $category4->setName('Rap');
        $manager->persist($category4);
        $manager->flush();
        $this->addReference('category4', $category4);


        $category5 = new Category();
        $category5->setName('HipHop');
        $manager->persist($category5);
        $manager->flush();
        $this->addReference('category5', $category5);


        $category6 = new Category();
        $category6->setName('Soul');
        $manager->persist($category6);
        $manager->flush();
        $this->addReference('category6', $category6);


        $category7 = new Category();
        $category7->setName('Funk');
        $manager->persist($category7);
        $manager->flush();
        $this->addReference('category7', $category7);


        $category8 = new Category();
        $category8->setName('Alternative');
        $manager->persist($category8);
        $manager->flush();
        $this->addReference('category8', $category8);


        $category9 = new Category();
        $category9->setName('Folk');
        $manager->persist($category9);
        $manager->flush();
        $this->addReference('category9', $category9);



        $category10 = new Category();
        $category10->setName('Jazz');
        $manager->persist($category10);
        $manager->flush();
        $this->addReference('category10', $category10);


        $category11 = new Category();
        $category11->setName('Punk');
        $manager->persist($category11);
        $manager->flush();
        $this->addReference('category11', $category11);


        $category12 = new Category();
        $category12->setName('Metal');
        $manager->persist($category12);
        $manager->flush();
        $this->addReference('category12', $category12);


        $category13 = new Category();
        $category13->setName('Hardcore');
        $manager->persist($category13);
        $manager->flush();


        $category14 = new Category();
        $category14->setName('Ambient');
        $manager->persist($category14);
        $manager->flush();

        $category15 = new Category();
        $category15->setName('Electro');
        $manager->persist($category15);
        $manager->flush();


        $category16 = new Category();
        $category16->setName('Reggae');
        $manager->persist($category16);
        $manager->flush();

        $category17 = new Category();
        $category17->setName('Latino');
        $manager->persist($category17);
        $manager->flush();

        $category18 = new Category();
        $category18->setName('K-Pop');
        $manager->persist($category18);
        $manager->flush();

        $category19 = new Category();
        $category19->setName('J-Pop');
        $manager->persist($category19);
        $manager->flush();

        $category20 = new Category();
        $category20->setName('C-Pop');
        $manager->persist($category20);
        $manager->flush();

        $category21 = new Category();
        $category21->setName('Country');
        $manager->persist($category21);
        $manager->flush();

        $category22 = new Category();
        $category22->setName('Blues');
        $manager->persist($category22);
        $manager->flush();

        $category23 = new Category();
        $category23->setName('Indie');
        $manager->persist($category23);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}