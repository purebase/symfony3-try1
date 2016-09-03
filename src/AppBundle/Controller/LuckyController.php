<?php
/**
 * @package     AppBundle\Controller
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller
{
    /**
     * @Route(
     *     "/lucky/number/{from}/{year}",
     *     defaults={
     *          "from": "Anyone",
     *          "year": "1968",
     *     },
     *     requirements={
     *         "year": "\d+"
     *     }
     *  )
     */
    public function numberAction($from, $year, Request $request)
    {
        $number = mt_rand(0, 100);
        $request_search = $request->query->get('search');

        return $this->render('lucky/number.html.twig', array(
            'callFromName' => $from,
            'year' => $year,
            'number' => $number,
            'search' => $request_search
        ));
    }

    /**
     * @Route(
     *     "/lucky/json"
     * )
     */
    public function getAJsonString() {
        return $this->json(array('username' => 'jane.doe'));
    }

}