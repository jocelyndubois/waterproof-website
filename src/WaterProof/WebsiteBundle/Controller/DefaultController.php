<?php

namespace WaterProof\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function rootAction()
    {
        return $this->redirect($this->generateUrl('presentation'), 301);
    }
    /**
     * @Route("/presentation", name="presentation")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/montauban/le-lieu", name="place")
     * @Template()
     */
    public function placeAction()
    {
        return array();
    }
    /**
     * @Route("/montauban/tarifs", name="prices")
     * @Template()
     */
    public function pricesAction()
    {
        return array();
    }
    /**
     * @Route("/montauban/contact", name="contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
    /**
     * @Route("/faq", name="faq")
     * @Template()
     */
    public function faqAction()
    {
        return array();
    }
    /**
     * @Route("/privacy", name="privacy")
     * @Template()
     */
    public function privacyAction()
    {
        return array();
    }
    /**
     * @Route("/mentions_legales", name="legals")
     * @Template()
     */
    public function legalsAction()
    {
        return array();
    }

}
