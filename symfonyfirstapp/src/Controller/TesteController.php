<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TesteController extends AbstractController
{
    /**
     * @Route("/teste", name="teste")
     */
    public function index() : Response
    {
        $data['titulo'] = 'Página de teste';
        $data['mensagem'] = 'Aprendendo templates no symfony';
        $data['paragrafo'] = 'Um Paragrafo qualquer';
        $data['frutas'] = [
            [
                'nome' =>'banana',
                'valor' => 1.99
            ],
            [
            'nome' =>'laranja',
                'valor' => 2.75
            ],
            [
                'nome' =>'abacaxi',
                'valor' => 1.50
            ]
        ];

        return $this->render('teste/index.html.twig', $data);
        // return new Response('<h1>Página Teste!</h1>');
    }

    /**
     * @Route("/teste/detalhes/{id}", name="detalhes")
     */
    public function detalhes($id) : Response
    {
        $data['titulo'] = 'Página de teste';
        $data['id'] = $id;

        return $this->render('teste/detalhes.html.twig', $data);
        //return new Response('<h1># '.$id.'</h1>');
    }

}