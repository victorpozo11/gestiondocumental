<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\InformacionSalud;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Informacionsalud controller.
 *
 * @Route("informacionsalud")
 */
class InformacionSaludController extends Controller
{
    /**
     * Lists all informacionSalud entities.
     *
     * @Route("/", name="informacionsalud_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $informacionSaluds = $em->getRepository('IfeeBundle:InformacionSalud')->findAll();

        return $this->render('informacionsalud/index.html.twig', array(
            'informacionSaluds' => $informacionSaluds,
        ));
    }

    /**
     * Creates a new informacionSalud entity.
     *
     * @Route("/new", name="informacionsalud_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $informacionSalud = new Informacionsalud();
        $form = $this->createForm('IfeeBundle\Form\InformacionSaludType', $informacionSalud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($informacionSalud);
            $em->flush();

            return $this->redirectToRoute('informacionsalud_show', array('idSalud' => $informacionSalud->getIdsalud()));
        }

        return $this->render('informacionsalud/new.html.twig', array(
            'informacionSalud' => $informacionSalud,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a informacionSalud entity.
     *
     * @Route("/{idSalud}", name="informacionsalud_show")
     * @Method("GET")
     */
    public function showAction(InformacionSalud $informacionSalud)
    {
        $deleteForm = $this->createDeleteForm($informacionSalud);

        return $this->render('informacionsalud/show.html.twig', array(
            'informacionSalud' => $informacionSalud,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing informacionSalud entity.
     *
     * @Route("/{idSalud}/edit", name="informacionsalud_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InformacionSalud $informacionSalud)
    {
        $deleteForm = $this->createDeleteForm($informacionSalud);
        $editForm = $this->createForm('IfeeBundle\Form\InformacionSaludType', $informacionSalud);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informacionsalud_edit', array('idSalud' => $informacionSalud->getIdsalud()));
        }

        return $this->render('informacionsalud/edit.html.twig', array(
            'informacionSalud' => $informacionSalud,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a informacionSalud entity.
     *
     * @Route("/{idSalud}", name="informacionsalud_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InformacionSalud $informacionSalud)
    {
        $form = $this->createDeleteForm($informacionSalud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($informacionSalud);
            $em->flush();
        }

        return $this->redirectToRoute('informacionsalud_index');
    }

    /**
     * Creates a form to delete a informacionSalud entity.
     *
     * @param InformacionSalud $informacionSalud The informacionSalud entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InformacionSalud $informacionSalud)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('informacionsalud_delete', array('idSalud' => $informacionSalud->getIdsalud())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
