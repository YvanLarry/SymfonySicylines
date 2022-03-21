<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class ConnectionController extends AbstractController
{
    /**
     * @Route("/connection", name="connection")
     */
    public function index(): Response
    {

        $form = $this-> createFormBuilder()
                    ->add('login', TextType::class)
                    -> add('motDePasse', PasswordType::class)
                    -> add('Valider', SubmitType::class)
                    -> add('annuler', ResetType::class)
                    -> getForm();

        $request = Request::creatFormGlobals();

        $form-> handleRequest($request);

        if($form-> isSubmitted() && $form-> isValid())
        {
            $data = $form-> getData();

            return $this-> render('connexion/form_to_connect.html.twig',array('data'=>$data));
        }

    return $this-> render('connexion/form_to_connect.html.twig',['form'=>$form-> createView()]);

    }
}
