<?php

namespace App\Controller;

use App\Entity\Billetera;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $consultaSaldo = $em->getRepository(Billetera::class)->ConsultarSaldo();
        return $this->render('dashboard/index.html.twig', [
            //'controller_name' => 'Bienvenido al Dashboard!!!',
            'consultaSaldo' => $consultaSaldo,
        ]);
    }
}
