<?php

namespace App\Controller;

use App\Entity\Calculate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculateController extends AbstractController
{
    /**
     * @Route("/calculate/{oper}/{nb1}/{nb2}", name="calculate")
     */
    
    public function calculatrice($oper, $nb1, $nb2){
        $operation = new Calculate($nb1, $nb2);
        $operation->setResult($oper);
        $res = $operation->getResult();

        return new Response($res);
    }
}
