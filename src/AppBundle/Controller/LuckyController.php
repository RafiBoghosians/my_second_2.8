<?php
/**
 * Created by PhpStorm.
 * User: bogho
 * Date: 19.04.2017
 * Time: 14:35
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number");
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}