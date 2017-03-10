<?php

namespace InputBundle\Controller;

use InputBundle\Entity\PostField;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response($this->renderView('@Input/Default/index.html.twig'));
    }

    public function addAction(Request $request)
    {
        $postfield = new PostField();
        $form = $this->createForm('InputBundle\Form\FormType', $postfield, array(
            'action' => $this->generateUrl('test_form'),
            'method' => 'POST'
        ));
        $form->handleRequest($request);
        if ($request->isMethod('POST') && $form->isValid()){
            $ds = $this->getDoctrine()->getManager();
            $ds->persist($postfield);
            $ds->flush();

        }
        return $this->render('InputBundle:Default:form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function showAction()
    {
        $posts = $this->getDoctrine()
            ->getRepository('InputBundle:PostField');
        if (!$posts){
            throw $this->createNotFoundException('[FAIL] Fetching post from DB');
        }
    }
}
