<?php
namespace AppBundle\Menu;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Router;
use Symfonian\Indonesia\AdminBundle\Menu\Builder as BaseMenu;
use Knp\Menu\MenuItem;

class Builder extends BaseMenu
{
    public function __construct(Router $router, ContainerInterface $container)
    {
        parent::__construct($router, $container);
    }

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = parent::mainMenu($factory, $options);

        $this->addIdNameMenu($menu);

        return $menu;
    }

    protected function addIdNameMenu(MenuItem $menu)
    {
        $menu->addChild('IdName', array(
            'uri' => '#',
            'label' => '<i class="fa fa-building"></i> <span>IdName</span><i class="fa fa-angle-double-left pull-right"></i></a>',
            'extras' => array('safe_label' => true),
            'attributes' => array(
                'class' => 'treeview'
            )
        ));
        $menu['IdName']->setChildrenAttribute('class', 'treeview-menu');

        $menu['IdName']->addChild('AddIdName', array(
            'label' => 'Tambah IdName',
            'route' => 'app_idname_new',
            'attributes' => array(
                'class' => 'treeview'
            )
        ));

        $menu['IdName']->addChild('ListIdName', array(
            'label' => 'Daftar IdName',
            'route' => 'app_idname_list',
            'attributes' => array(
                'class' => 'treeview'
            )
        ));

        return $menu;
    }
}
