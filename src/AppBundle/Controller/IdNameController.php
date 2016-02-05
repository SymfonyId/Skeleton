<?php
namespace AppBundle\Controller;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfonian\Indonesia\AdminBundle\Annotation\Crud;
use Symfonian\Indonesia\AdminBundle\Annotation\Page;
use Symfonian\Indonesia\AdminBundle\Controller\CrudController;

/**
 * @Route("/contoh")
 *
 * @Page("Sekedar Contoh", description="Ini adalah sekedar contoh CRUD menggunakan SIAB")
 * @Crud("AppBundle\Entity\IdName", form="AppBundle\Form\IdNameType", showFields={"name"})
 */
class IdNameController extends CrudController
{
    protected function getClassName()
    {
        return __CLASS__;
    }
}
