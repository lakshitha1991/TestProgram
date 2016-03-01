<?php

namespace Lak\TestBundle\Controller;

//use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lak\TestBundle\Form\LoginType;

//use Symfony\Component\HttpFoundation\Response;


class SecurityController extends Controller {

    public function loginAction() {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(new LoginType(), null, array(
            'action' => $this->generateUrl('login'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array(
            'button_class' => 'btn btn-primary center-block',
            'label' => 'login'
        ));
        return $this->render('TestBundle:Default:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
                    'form' => $form->createView(),
        ));
    }

}
