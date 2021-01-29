<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant/{ine}", name="etudiant")
     */
    public function moyenne($ine)
    {
        $etud = [
            123 =>["maths" => 11,
                    "info" => 15,
                    "gestion" =>16],
            456 =>["maths" => 10,
                    "info" => 18,
                    "gestion" =>11],
            789 =>["maths" => 8,
                    "info" => 7,
                    "gestion" =>3],
        ];

        return $this->render('etudiant/index.html.twig', [
            'ine' => $ine,
            'etud' => $etud
        ]);
    }
}
