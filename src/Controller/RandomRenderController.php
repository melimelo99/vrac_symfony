<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomRenderController extends AbstractController
{
    /**
     * @Route("/randomrender/{number}/{essais}", name="randomrender")
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

        return $this->render('random_render/index.html.twig', [
            'i' =>  $i,
            'number'=> $number
        ]);
    }
}
