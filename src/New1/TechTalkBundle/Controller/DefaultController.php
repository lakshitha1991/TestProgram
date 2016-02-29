<?php

namespace New1\TechTalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('New1TechTalkBundle:Default:index.html.twig', array('name' => $name));
    }
}
