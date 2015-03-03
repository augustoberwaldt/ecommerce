<?php

namespace Clobb\ManagerBundle\Controller;

namespace Clobb\ManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Util\Codes;
use Clobb\ManagerBundle\Controller\CoreController;
use Clobb\ManagerBundle\Entity\MgnPlan;
use Clobb\ManagerBundle\Form\MgnPlanType;

/**
 * MgnPlan controller.
 *
 * @Route("/mgnplan")
 */
class MgnPlanController extends CoreController
{

    /**
     * Lists all MgnPlan.
     *
     * @ApiDoc(
     *     section = "5- Cadastro de Planos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ClobbManagerBundle:MgnPlan')->findAllPlans();

        return $this->view($entities);
    }

    /**
     * busca um Plano.
     *
     * @ApiDoc(
     *     section = "5- Cadastro de Planos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get("/get/{id}")
     */

    public function getAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ClobbManagerBundle:Planos')->find($id);

        return $this->view($entities);
    }
    /**
     * Update  Plano.
     *
     * @ApiDoc(
     *     section = "5- Cadastro de Planos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Put("/update/{id}")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClobbManagerBundle:Planos')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plano entity.');
        }

    }
    /**
     * Delete  Plano.
     *
     * @ApiDoc(
     *     section = "5- Cadastro de Planos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Delete("/delete/{id}")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ClobbManagerBundle:Planos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planos entity.');
        }

        $entity->setDataMotificacao(new \DateTime(date('Y-m-d H:i:s')));
        $entity->setStatus(0);
        $em->flush();

        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }

}
