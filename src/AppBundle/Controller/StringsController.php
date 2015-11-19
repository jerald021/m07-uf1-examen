<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Services\StringsService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StringsController extends Controller
{
    /**
     * @Route("/cadenas", name="cadenas")
     */
    public function indexAction()
    {
        //esto es el return
        return $this->render('strings/indexStrings.html.twig');
    }

    /**
     * @Route("/cadenas/unir", name="cadenas-unir")
     */
    public function unirAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');

        $s = $this->container->get('cadenas');

        $s->setCadena1($cadena1);
        $s->setCadena2($cadena2);

        $s->unir();

        $result = $s->getResult();

        // replace this example code with whatever you need
        return $this->render('strings/metodosStrings.html.twig', array(
            'resultadoCadenas' => $result,
        ));
    }

    /**
     * @Route("/cadenas/mayusculas", name="cadenas-mayusculas")
     */
    public function upperCaseAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');

        $s = $this->container->get('cadenas');

        $s->setCadena1($cadena1);
        $s->setCadena2($cadena2);

        $s->upperCase();

        $result = $s->getUpperCase();

        // replace this example code with whatever you need
        return $this->render('strings/metodosStrings.html.twig', array(
            'resultadoCadenas' => $result,
        ));
    }

    /**
     * @Route("/cadenas/minisculas", name="cadenas-minisculas")
     */
    public function lowerCaseAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');

        $s = $this->container->get('cadenas');

        $s->setCadena1($cadena1);
        $s->setCadena2($cadena2);

        $s->lowerCase();

        $result = $s->getLowerCase();

        // replace this example code with whatever you need
        return $this->render('strings/metodosStrings.html.twig', array(
            'resultadoCadenas' => $result,
        ));
    }

    /**
     * @Route("/cadenas/contar", name="cadenas-contar")
     */
    public function lengthAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');

        $s = $this->container->get('cadenas');

        $s->setCadena1($cadena1);
        $s->setCadena2($cadena2);

        $s->length();

        $result = $s->getLength();

        // replace this example code with whatever you need
        return $this->render('strings/metodosStrings.html.twig', array(
            'resultadoCadenas' => $result,
        ));
    }

    /**
     * @Route("/cadenas/posicion-caracter", name="cadenas-posicion-caracter")
     */
    public function charAtAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');

        $s = $this->container->get('cadenas');

        $s->setCadena1($cadena1);
        $s->setCadena2($cadena2);

        $s->charAt();

        $result = $s->getCharAt();

        // replace this example code with whatever you need
        return $this->render('strings/metodosStrings.html.twig', array(
            'resultadoCadenas' => $result,
        ));
    }



}
