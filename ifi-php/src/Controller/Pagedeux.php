<?php
/**
 * Created by PhpStorm.
 * User: peyroux
 * Date: 29/11/17
 * Time: 09:00
 */
declare(strict_types=1);

namespace App\Controller;


use App\Entity\Tournament;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Pagedeux extends AbstractController
{
    /**
     * @Route("/page",name="pagedeux")
     */
    public function index(Request $request){

        $tournaments = $this->getDoctrine()->getManager()->getRepository(Tournament::class)->findAll();
        return $this->render('homepage.html.twig',['tournaments'=> $tournaments, 'message'=> $request->query->get('message','pas de message') ]);
    }
}