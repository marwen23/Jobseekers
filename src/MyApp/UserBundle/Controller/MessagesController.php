<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessagesController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Template:messages.html.twig');
    }
    public function composeAction($name)
    {
        return $this->render('MyAppUserBundle:Template:compose_message.html.twig');
    }
}
