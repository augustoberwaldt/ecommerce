<?php

namespace Clobb\ManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Clobb\ManagerBundle\Entity\MgnTerms;
use Clobb\ManagerBundle\Form\MgnTermsType;
use FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Util\Codes;
use Clobb\ManagerBundle\Controller\CoreController;

/**
 * MgnUser controller.
 *
 * @Route("/mgnUser")
 */
class MgnUserController extends CoreController
{


    /**
     * Lists all MgnTerms entities.
     *@ApiDoc(
     *     section = "6 - Cadastrar Usuario",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ClobbManagerBundle:MgnTerms')->findAll();

        return $this->view($entities);
    }




}
