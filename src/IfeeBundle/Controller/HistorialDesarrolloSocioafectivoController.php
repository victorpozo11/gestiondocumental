<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\HistorialDesarrolloSocioafectivo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Historialdesarrollosocioafectivo controller.
 *
 * @Route("historialdesarrollosocioafectivo")
 */
class HistorialDesarrolloSocioafectivoController extends Controller
{
    /**
     * Lists all historialDesarrolloSocioafectivo entities.
     *
     * @Route("/", name="historialdesarrollosocioafectivo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historialDesarrolloSocioafectivos = $em->getRepository('IfeeBundle:HistorialDesarrolloSocioafectivo')->findAll();

        return $this->render('historialdesarrollosocioafectivo/index.html.twig', array(
            'historialDesarrolloSocioafectivos' => $historialDesarrolloSocioafectivos,
        ));
    }

    /**
     * Creates a new historialDesarrolloSocioafectivo entity.
     *
     * @Route("/new", name="historialdesarrollosocioafectivo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $historialDesarrolloSocioafectivo = new Historialdesarrollosocioafectivo();
        $form = $this->createForm('IfeeBundle\Form\HistorialDesarrolloSocioafectivoType', $historialDesarrolloSocioafectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historialDesarrolloSocioafectivo);
            $em->flush();

            return $this->redirectToRoute('historialdesarrollosocioafectivo_show', array('idPsicologia2' => $historialDesarrolloSocioafectivo->getIdpsicologia2()));
        }

        return $this->render('historialdesarrollosocioafectivo/new.html.twig', array(
            'historialDesarrolloSocioafectivo' => $historialDesarrolloSocioafectivo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a historialDesarrolloSocioafectivo entity.
     *
     * @Route("/{idPsicologia2}", name="historialdesarrollosocioafectivo_show")
     * @Method("GET")
     */
    public function showAction(HistorialDesarrolloSocioafectivo $historialDesarrolloSocioafectivo)
    {
        $deleteForm = $this->createDeleteForm($historialDesarrolloSocioafectivo);

        return $this->render('historialdesarrollosocioafectivo/show.html.twig', array(
            'historialDesarrolloSocioafectivo' => $historialDesarrolloSocioafectivo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing historialDesarrolloSocioafectivo entity.
     *
     * @Route("/{idPsicologia2}/edit", name="historialdesarrollosocioafectivo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HistorialDesarrolloSocioafectivo $historialDesarrolloSocioafectivo)
    {
        $deleteForm = $this->createDeleteForm($historialDesarrolloSocioafectivo);
        $editForm = $this->createForm('IfeeBundle\Form\HistorialDesarrolloSocioafectivoType', $historialDesarrolloSocioafectivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('historialdesarrollosocioafectivo_edit', array('idPsicologia2' => $historialDesarrolloSocioafectivo->getIdpsicologia2()));
        }

        return $this->render('historialdesarrollosocioafectivo/edit.html.twig', array(
            'historialDesarrolloSocioafectivo' => $historialDesarrolloSocioafectivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a historialDesarrolloSocioafectivo entity.
     *
     * @Route("/{idPsicologia2}", name="historialdesarrollosocioafectivo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HistorialDesarrolloSocioafectivo $historialDesarrolloSocioafectivo)
    {
        $form = $this->createDeleteForm($historialDesarrolloSocioafectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historialDesarrolloSocioafectivo);
            $em->flush();
        }

        return $this->redirectToRoute('historialdesarrollosocioafectivo_index');
    }

    /**
     * Creates a form to delete a historialDesarrolloSocioafectivo entity.
     *
     * @param HistorialDesarrolloSocioafectivo $historialDesarrolloSocioafectivo The historialDesarrolloSocioafectivo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistorialDesarrolloSocioafectivo $historialDesarrolloSocioafectivo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historialdesarrollosocioafectivo_delete', array('idPsicologia2' => $historialDesarrolloSocioafectivo->getIdpsicologia2())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
