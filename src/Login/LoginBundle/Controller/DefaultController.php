<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = new Session();
        if ($request->getMethod() == 'POST') {
            $user = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');
            $foundUser = $repository->findOneBy(array('username' => $user, 'password' => $password));
            if ($foundUser) {
                $session->clear();
                $session->start();
                $session->set('loggedin', $foundUser->getUsername());
                return $this->render('BlogBlogBundle:Default:index.html.twig', array('name' => $foundUser->getUsername()));
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig', array('msg' => 'Login Failed'));
            }
        } else if ($session->has('loggedin')) {
            return $this->render('BlogBlogBundle:Default:index.html.twig', array('name' => $session->get('loggedin')));
        } else {
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
    }

    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

}
