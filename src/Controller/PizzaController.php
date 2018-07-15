<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PizzaController extends Controller
{
    /**
     * @Route("/pizza", name="pizza")
     */
    public function index()
    {
        return $this->json([
            'name' => '4 fromages !',
            'composition' => [
              'chevre',
              'emmental',
              'bleu',
              'comte',
              'oeuf'
            ],
        ]);
    }
}
