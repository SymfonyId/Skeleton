<?php
namespace AppBundle\Controller;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Symfonian\Indonesia\AdminBundle\Controller\CrudController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfonian\Indonesia\AdminBundle\Annotation\Schema\Crud;
use Symfonian\Indonesia\AdminBundle\Annotation\Schema\Grid;
use Symfonian\Indonesia\AdminBundle\Annotation\Schema\Page;

/**
 * @Route("/contoh")
 *
 * @Page("Sekedar Contoh", description="Ini adalah sekedar contoh CRUD menggunakan SIAB")
 * @Crud("AppBundle\Entity\IdName", showFields={"name"})
 * @Grid({"name"}, filter={"name"})
 */
class IdNameController extends CrudController
{
}
