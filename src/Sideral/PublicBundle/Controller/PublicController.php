<?php

namespace Sideral\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicController extends Controller
{
    /**
     * @Route("/", name="_sideral_public_accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/ressources", name="_sideral_public_ressources")
     * @Template()
     */
    public function resourcesAction()
    {
        return array();
    }

}
