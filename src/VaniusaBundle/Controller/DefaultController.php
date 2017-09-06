<?php

namespace VaniusaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VaniusaBundle:Layouts:layout.html.twig');
    }
}
