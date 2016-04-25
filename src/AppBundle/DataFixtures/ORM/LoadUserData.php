<?php
namespace AppBundle\DataFixtures\ORM;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

final class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $userPassword = 'siab';
        $date = new \DateTime();

        $user = new User();
        $user->setUsername($userPassword);
        $user->setEmail('admin@mail.com');
        $user->setFullName('super administrator');
        $user->setRoles(array('ROLE_SUPER_ADMIN'));
        $user->setPlainPassword($userPassword);
        $user->setEnabled(true);
        $user->setCreatedAt($date);
        $user->setUpdatedAt($date);
        $user->setCreatedBy('SYSTEM');
        $user->setUpdatedBy('SYSTEM');

        $manager->persist($user);
        $manager->flush();
    }
}
