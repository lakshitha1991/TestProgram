<?php

namespace Lak\TestBundle\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
