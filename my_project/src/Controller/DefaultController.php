<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User; 

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */


    // public function index(): Response
    // {

    //     return $this->render('default/index.html.twig', [
    //         'controller_name' => 'DefaultController0909',
    //     ]);

    // }


    public function index()
    {
        // $users =[];
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $gifts = ['flowers', 'car', 'piano', 'money'];

        shuffle($gifts);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'random_gift' => $gifts,

        ]);


        // return $this->render('default/index.html.twig', [
        //     'controller_name' => 'DefaultController0909',
        // ]);

    }

     /**
     * @Route("/default/{name}", name="default")
     */


    // public function index($name)
    // {
     
    //     return $this->json(['username'=>'jayson.liu']);
    //     return new Response("Hello!Symfony!");
    //     return new Response("Hello, $name!");
    //     return $this->redirect('http://symfony.com');
    //     return $this->redirectToRoute('default2');

    // }

    /**
     * @Route("/default2/", name="default2")
     */


    // public function index2()
    // {
    //     return new Response("I am from default2 route");
    // }

}
