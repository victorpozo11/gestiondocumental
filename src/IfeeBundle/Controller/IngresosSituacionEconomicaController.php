<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\IngresosSituacionEconomica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ingresossituacioneconomica controller.
 *
 * @Route("ingresossituacioneconomica")
 */
class IngresosSituacionEconomicaController extends Controller
{
    /**
     * Lists all ingresosSituacionEconomica entities.
     *
     * @Route("/", name="ingresossituacioneconomica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ingresosSituacionEconomicas = $em->getRepository('IfeeBundle:IngresosSituacionEconomica')->findAll();

        return $this->render('ingresossituacioneconomica/index.html.twig', array(
            'ingresosSituacionEconomicas' => $ingresosSituacionEconomicas,
        ));
    }

    /**
     * Creates a new ingresosSituacionEconomica entity.
     *
     * @Route("/new", name="ingresossituacioneconomica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ingresosSituacionEconomica = new Ingresossituacioneconomica();
        $form = $this->createForm('IfeeBundle\Form\IngresosSituacionEconomicaType', $ingresosSituacionEconomica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingresosSituacionEconomica);
            $em->flush();

            return $this->redirectToRoute('ingresossituacioneconomica_show', array('idIngresos' => $ingresosSituacionEconomica->getIdingresos()));
        }

        return $this->render('ingresossituacioneconomica/new.html.twig', array(
            'ingresosSituacionEconomica' => $ingresosSituacionEconomica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingresosSituacionEconomica entity.
     *
     * @Route("/{idIngresos}", name="ingresossituacioneconomica_show")
     * @Method("GET")
     */
    public function showAction(IngresosSituacionEconomica $ingresosSituacionEconomica)
    {
        $deleteForm = $this->createDeleteForm($ingresosSituacionEconomica);

        return $this->render('ingresossituacioneconomica/show.html.twig', array(
            'ingresosSituacionEconomica' => $ingresosSituacionEconomica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingresosSituacionEconomica entity.
     *
     * @Route("/{idIngresos}/edit", name="ingresossituacioneconomica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IngresosSituacionEconomica $ingresosSituacionEconomica)
    {
        $deleteForm = $this->createDeleteForm($ingresosSituacionEconomica);
        $editForm = $this->createForm('IfeeBundle\Form\IngresosSituacionEconomicaType', $ingresosSituacionEconomica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ingresossituacioneconomica_edit', array('idIngresos' => $ingresosSituacionEconomica->getIdingresos()));
        }

        return $this->render('ingresossituacioneconomica/edit.html.twig', array(
            'ingresosSituacionEconomica' => $ingresosSituacionEconomica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ingresosSituacionEconomica entity.
     *
     * @Route("/{idIngresos}", name="ingresossituacioneconomica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IngresosSituacionEconomica $ingresosSituacionEconomica)
    {
        $form = $this->createDeleteForm($ingresosSituacionEconomica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingresosSituacionEconomica);
            $em->flush();
        }

        return $this->redirectToRoute('ingresossituacioneconomica_index');
    }

    /**
     * Creates a form to delete a ingresosSituacionEconomica entity.
     *
     * @param IngresosSituacionEconomica $ingresosSituacionEconomica The ingresosSituacionEconomica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IngresosSituacionEconomica $ingresosSituacionEconomica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingresossituacioneconomica_delete', array('idIngresos' => $ingresosSituacionEconomica->getIdingresos())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
