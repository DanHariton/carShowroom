<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index")
     */
    public function indexAction()
    {
        return $this->render('admin/action/index.html.twig');
    }

    /**
     * @Route("/car/add", name="admin_car_add")
     */
    public function carAddAction()
    {
//        $this->createForm()

        return $this->render('admin/action/car_add.html.twig');
    }

    /**
     * @Route("/car/list", name="admin_car_list")
     */
    public function carListAction()
    {
        return $this->render('admin/action/car_list.html.twig');
    }
}