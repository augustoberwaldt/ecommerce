<?php

namespace Clobb\AppBundle\Controller;

use Clobb\AppBundle\Controller\CoreController.php;

/**
 * Sample controller.
 *
 * @Route("/")
 */
class SampleController extends CoreController
{

    /**
     * Sample.
     *
     * @ApiDoc(
     *     section = "Sample File",
     *     statusCodes={
     *         200="Returned when successful",
     *     }
     * )
     * @Rest\Get("/")
     */
    public function indexAction(Request $request){
        return array();
    }
}
