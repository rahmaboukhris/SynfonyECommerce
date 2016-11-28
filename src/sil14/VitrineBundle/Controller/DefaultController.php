<?php

namespace sil14\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sil14VitrineBundle:Default:index.html.twig');
    }
}
