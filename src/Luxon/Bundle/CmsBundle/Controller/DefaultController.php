<?php

namespace Luxon\Bundle\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LuxonCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
