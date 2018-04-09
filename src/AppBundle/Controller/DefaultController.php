<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Formation;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name= "Charlotte", $firstname = "Chaminade")
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Formation');
        $formations = $repo->findAll();
        
        return array(
            'name' => $name,
            'firstname' => $firstname,
            'formations' => $formations
        );
    }

    /**
     * @Route("/create/formation", name="create_formation")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $form = new Formation();
        $form->setName("Ma formation");
        $form->setDateDebut(New \DateTime());
        $form->setDateFin(New \DateTime());
        $form->setLieu("Brest, France");

        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();

        return array();
    }
}
