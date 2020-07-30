<?php

namespace App\Controller;

use App\Entity\Billetera;
use App\Form\RecargaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/*
use App\Entity\User;
use App\Form\UserType;
use phpDocumentor\Reflection\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
*/


class RecargaController extends AbstractController
{
    /**
     * @Route("/recarga", name="recarga")
     */
    public function index(Request $request)
    {
        $recarga = new Billetera();
        $form = $this->createForm(RecargaType::class, $recarga);
        $form->handleRequest($request);
        //pendiente para saber donde se valida
        if ($form->isSubmitted() && $form->isValid()) { //&& $this->getUser() == documento.getData()
            $em = $this->getDoctrine()->getManager();
            $em->persist($recarga);
            $em->flush();
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('recarga/index.html.twig', [
            //'form' => $form->createView(), //'RecargaController',
            //'controller_name' => 'RegistroController',
            'form' => $form->createView()
        
        ]);
    }
}
