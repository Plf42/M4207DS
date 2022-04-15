<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TacheController extends AbstractController
{
    /**
     * @Route("/tache", name="app_tache")
     */
    public function index(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/listeTaches", name="listeTaches")
     */

     /**
      * @Route("/supprTache", name="supprTache")
      */

      /**
       * @Route("/creerTache", name="creertache")
       */

       /**
        * @Route("/insertTache", name="insertTache")
        */
}

