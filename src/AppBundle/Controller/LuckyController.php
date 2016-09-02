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
    public function numberAction($from, $year)
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'callFromName' => $from,
            'year' => $year,
            'number' => $number
        ));
    }
}