<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $user = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');
            $foundUser = $repository->findOneBy(array('username' => $user, 'password' => $password));
            if ($foundUser) {
                $session = new Session();
                $session->start();
                $session->set('loggedin', $foundUser->getUsername());
                return $this->render('BlogBlogBundle:Default:index.html.twig', array('name' => $foundUser->getUsername()));
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig', array('msg' => 'Login Failed'));
            }
        }
        return $this->render('LoginLoginBundle:Default:login.html.twig', array('msg' => ''));
    }
}