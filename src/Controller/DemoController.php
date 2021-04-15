<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @return Response
     * @author lzx
     */
    #[Route('/',name: 'home')]
    public function index() :Response
    {
        return new Response('hello world');
    }

    #[Route('/demo/{id}', name: 'demo',methods: ['GET'])]
    public function demo(int $id) : Response
    {
        return new Response($id);
    }
}