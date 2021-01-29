<?php

namespace App\Entity;

use App\Repository\CalculateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalculateRepository::class)
 */
class Calculate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb1;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb2;

    /**
     * @ORM\Column(type="integer")
     */
    private $result;

    public function __construct($nb1, $nb2){
        $this->nb1 = $nb1;
        $this->nb2 = $nb2;
    }
    public function getResult()
    {
        return $this->result;
    }

    public function setResult($oper)
    {
        $nb1=$this->nb1;
        $nb2=$this->nb2;
        switch($oper){
            case 'addition':
                $this->result = $nb1 + $nb2;
                break;
            case 'multiplication':
                $this->result = $nb1*$nb2;
                break;
            case 'soustraction':
                $this->result = $nb1-$nb2;
                break;
            case 'division' :
               $this->result = $nb1/$nb2;
                break;
        }

        return $this->result;
    }
}
