<?php

namespace Clobb\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Clobb\AppBundle\Entity\MgnTerms;
use Clobb\AppBundle\Form\MgnTermsType;
use FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Util\Codes;
use Clobb\AppBundle\Controller\CoreController;

/**
 * MgnTerms controller.
 *
 * @Route("/mgnterms")
 */
class MgnTermsController extends CoreController
{


    /**
     * Lists all MgnTerms entities.
     *@ApiDoc(
     *     section = "6 - Cadastrar Termos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ClobbAppBundle:MgnTerms')->findAll();

        return $this->view($entities);
    }
    /**
     * Creates a new MgnTerms entity.
     *
     *@ApiDoc(
     *     section = "6 - Cadastrar Termos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Post("/create")
     */
    public function createAction(Request $request)
    {
        $entity = new MgnTerms();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->view($entity, Codes::HTTP_CREATED);
        }

        return $form;
    }

    /**
     * Creates a form to create a MgnTerms entity.
     *
     * @param MgnTerms $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MgnTerms $entity)
    {
        $form = $this->createForm(new MgnTermsType(), $entity);

        return $form;
    }


    /**
     * Finds and displays a MgnTerms entity.
     *
     * *@ApiDoc(
     *     section = "6 - Cadastrar Termos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get("/show/{id}")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClobbAppBundle:MgnTerms')->find($id);


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MgnTerms entity.');
        }

        $form = $this->createCreateForm($entity);

        return $this->view($entity);

    }




    /**
     *   Backend login
     * <br><br>Expected JSON (sample):<pre>
     * {
     *   "value": "dcsdcsd",
     *   "term_key": "ddsvsdvd"
     * }
     * </pre>
     *
     * Edits an existing MgnTerms entity.
     *
     *@ApiDoc(
     *     section = "6 - Cadastrar Termos",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Put("/update/{id}")
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClobbAppBundle:MgnTerms')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MgnTerms entity.');
        }

        $editForm = $this->createCreateForm($entity);
        $editForm->submit($request->request->all());

        if ($editForm->isValid()) {

            $em->flush();

            return $this->view(null, Codes::HTTP_NO_CONTENT);
        }


        return $this->view($editForm);
    }




}
