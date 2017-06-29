<?php

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements \Doctrine\Common\DataFixtures\OrderedFixtureInterface, \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    private $container;

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $em = $this->container->get('doctrine')->getManager();

        $user1 = $em->getRepository(User::class)->findOneByUsername('awesome1');
        $user1->addPlaylist($this->getReference('playlist1'));
        $this->getReference('playlist1')->setUser($user1);
        $manager->persist($user1);
        $manager->flush();

        $user2 = $em->getRepository(User::class)->findOneByUsername('jsisbest');
        $user2->addPlaylist($this->getReference('playlist2'));
        $this->getReference('playlist2')->setUser($user2);
        $manager->persist($user2);
        $manager->flush();

        $user3 = $em->getRepository(User::class)->findOneByUsername('angular4ever');
        $user3->addPlaylist($this->getReference('playlist3'));
        $this->getReference('playlist3')->setUser($user3);
        $manager->persist($user3);
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}