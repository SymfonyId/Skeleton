<?php
namespace AppBundle\Entity;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Doctrine\ORM\Mapping as ORM;
use Symfonian\Indonesia\AdminBundle\Grid\Column;
use Symfonian\Indonesia\AdminBundle\Grid\Filter;
use Symfonian\Indonesia\AdminBundle\Contract\BulkDeletableInterface;
use Symfonian\Indonesia\AdminBundle\Contract\EntityInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="siab_idname")
 */
class IdName implements EntityInterface, BulkDeletableInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column()
     * @Filter()
     * @ORM\Column(name="program_name", type="string", length=77)
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = strtoupper($name);

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDeleteInformation()
    {
        return $this->getName();
    }
}
