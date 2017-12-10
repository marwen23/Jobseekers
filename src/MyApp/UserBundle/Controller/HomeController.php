<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Template:index.html.twig');
    }
    public function hallAction($name)
    {
       /* $em = $this->getDoctrine()->getManager();
        $connectedUser = $this->getUser();
        $connectedUserId = $connectedUser->getId();
        $Profile = new Profile();
        $Profile->setProfileid($connectedUserId);
        $em->persist($Profile);
        $em->flush();
*/
        return $this->render('MyAppUserBundle:Template:hall.html.twig');
    }

}
