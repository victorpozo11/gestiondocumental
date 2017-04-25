<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\HistorialEducativo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Historialeducativo controller.
 *
 * @Route("historialeducativo")
 */
class HistorialEducativoController extends Controller
{
    /**
     * Lists all historialEducativo entities.
     *
     * @Route("/", name="historialeducativo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historialEducativos = $em->getRepository('IfeeBundle:HistorialEducativo')->findAll();

        return $this->render('historialeducativo/index.html.twig', array(
            'historialEducativos' => $historialEducativos,
        ));
    }

    /**
     * Creates a new historialEducativo entity.
     *
     * @Route("/new", name="historialeducativo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $historialEducativo = new Historialeducativo();
        $form = $this->createForm('IfeeBundle\Form\HistorialEducativoType', $historialEducativo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historialEducativo);
            $em->flush();

            return $this->redirectToRoute('historialeducativo_show', array('idHistorial' => $historialEducativo->getIdhistorial()));
        }

        return $this->render('historialeducativo/new.html.twig', array(
            'historialEducativo' => $historialEducativo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a historialEducativo entity.
     *
     * @Route("/{idHistorial}", name="historialeducativo_show")
     * @Method("GET")
     */
    public function showAction(HistorialEducativo $historialEducativo)
    {
        $deleteForm = $this->createDeleteForm($historialEducativo);

        return $this->render('historialeducativo/show.html.twig', array(
            'historialEducativo' => $historialEducativo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing historialEducativo entity.
     *
     * @Route("/{idHistorial}/edit", name="historialeducativo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HistorialEducativo $historialEducativo)
    {
        $deleteForm = $this->createDeleteForm($historialEducativo);
        $editForm = $this->createForm('IfeeBundle\Form\HistorialEducativoType', $historialEducativo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('historialeducativo_edit', array('idHistorial' => $historialEducativo->getIdhistorial()));
        }

        return $this->render('historialeducativo/edit.html.twig', array(
            'historialEducativo' => $historialEducativo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a historialEducativo entity.
     *
     * @Route("/{idHistorial}", name="historialeducativo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HistorialEducativo $historialEducativo)
    {
        $form = $this->createDeleteForm($historialEducativo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historialEducativo);
            $em->flush();
        }

        return $this->redirectToRoute('historialeducativo_index');
    }

    /**
     * Creates a form to delete a historialEducativo entity.
     *
     * @param HistorialEducativo $historialEducativo The historialEducativo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistorialEducativo $historialEducativo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historialeducativo_delete', array('idHistorial' => $historialEducativo->getIdhistorial())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
