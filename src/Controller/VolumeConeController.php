<?php

namespace App\Controller;

use App\Entity\Cone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VolumeConeController extends AbstractController
{
    /**
     * @Route("/volume/cone/{rayon}/{hauteur}", name="volume_cone")
     */

     public function calculVolume($rayon, $hauteur){
         $rayon = $rayon;
         $hauteur = $hauteur;

         $cal = new Cone($rayon, $hauteur);
         $res = $cal->getVolume();
         
         return new Response("<p>".$rayon. "exp(2) *".$hauteur."* pi/3 = ".$res."</p>");
     }
    
}
