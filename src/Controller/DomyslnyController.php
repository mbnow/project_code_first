<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DomyslnyController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {


        return new Response(
            '<html><body>cos tam</body></html>'
        );
    }
}

