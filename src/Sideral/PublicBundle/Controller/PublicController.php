<?php

namespace Sideral\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicController extends Controller
{
    /**
     * @Route("/", name="sideral_public_accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
