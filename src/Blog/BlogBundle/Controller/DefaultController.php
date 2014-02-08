<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction() {
        $session = new Session();
        if ($session->has('loggedin')) {
            return $this->render('BlogBlogBundle:Default:index.html.twig', array('name' => $session->get('loggedin')));
        } else {
            return $this->render('LoginLoginBundle:Default:login.html.twig', array('msg' => 'Login to see the blog'));
        }
    }

}
