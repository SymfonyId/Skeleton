<?php

namespace AppBundle\Entity;

/*
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: https://github.com/ihsanudin
 */

use Doctrine\ORM\Mapping as ORM;
use Symfonian\Indonesia\AdminBundle\Model\AdvancedUser as BaseUser;

/**
 * @ORM\Entity()
 * @ORM\Table(name="siab_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
