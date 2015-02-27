<?php

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

/**
 * Auth controller.
 *
 * @Route("/auth")
 */
class AuthController extends CoreController
{

    /**
     * Login method.
     *
     * Expected JSON (Sample): <pre>
     * {
     *  "username" : "portotech",
     *  "password" : "Portotech824"
     * }
     * </pre>
     *
     * Return JSON: <pre>
     * {
     *  "authorization_key" : "202cb962ac59075b964b07152d234b70"
     * }
     * </pre>
     *
     * @ApiDoc(
     *     section = "01. Auth Section",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Post("/login")
     */
    public function loginAction(Request $request){
        return array();
    }

    /**
     * Logout method.
     *
     * @ApiDoc(
     *     section = "01. Auth Section",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get("/logout")
     */
    public function logoutAction(Request $request){
        return array();
    }

    /**
     * Forget Password method.
     *
     * Expected JSON (Sample): <pre>
     * {
     *  "username" : "portotech"
     * }
     * OR
     * {
     *  "email" : "contato@portotech.org"
     * }
     * </pre>
     *
     * @ApiDoc(
     *     section = "01. Auth Section",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Post("/forgetpassword")
     */
    public function forgetPasswordAction(Request $request){
        return array();
    }

    /**
     * Forget Username method.
     *
     * Expected JSON (Sample): <pre>
     * {
     *  "email" : "contato@portotech.org"
     * }
     * </pre>
     *
     * @ApiDoc(
     *     section = "01. Auth Section",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Post("/forgetusername")
     */
    public function forgetUsernameAction(Request $request){
        return array();
    }
}
