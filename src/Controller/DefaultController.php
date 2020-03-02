<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'items' => [
                [
                    'id' => 4,
                    'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy',
                    'url' => 'https://loremflickr.com/320/240'
                ],
                [

                    'id' => 5,
                    'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,',
                    'url' => 'https://loremflickr.com/320/240'
                ],

            ]]);
    }
}
