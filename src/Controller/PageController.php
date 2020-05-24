<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page_index")
     */
    public function indexAction()
    {
        return $this->render('page/action/index.html.twig');
    }

    /**
     * @Route("/detail-car", name="page_detail_car")
     */
    public function detailCarAction()
    {
        return $this->render('page/action/detailCar');
    }
}