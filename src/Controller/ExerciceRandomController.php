<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceRandomController extends AbstractController
{
    /**
     * @Route("/random/{number}/{essais}", name="random")
     */
        
    public function random($number, $essais)
    {
        $number = $number;
        $res=0;
        $i=0;
        while($res != $number){
            $res = rand(1, $essais);
            $i++;
        }

        $message = '<html><body>'.$i.' essais pour trouver le nombre '.$number.'</body></html>';

        return new Response($message);
    }
}
