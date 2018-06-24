<?php

namespace Verto\VertomoneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VertoVertomoney/Page/index.html.twig');
    }
}
