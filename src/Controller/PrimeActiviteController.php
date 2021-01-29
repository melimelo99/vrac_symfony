<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimeActiviteController extends AbstractController
{
    /**
     * @Route("/prime/{travailleur}/{ca}",name="prime_activite_freelance")
     * @Route("/prime/{travailleur}/{revenu}/{taux}", name="prime_activite_salarie")
     */
    public function calculPrime($travailleur, $revenu=null, $ca=null, $taux=null){
        $heures = 35;
        $total=0;
        $travailleur = $travailleur;

        if ($travailleur == 'salarie'){
            $total = $revenu * $taux * $heures ;
        }if ($travailleur =='freelance'){
            $total = $ca;
        }

        return $this->render('/prime_activite/index.html.twig',[
            'total' => $total
        ]);
    }
}
