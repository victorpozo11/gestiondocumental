<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Vivienda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Vivienda controller.
 *
 * @Route("vivienda")
 */
class ViviendaController extends Controller
{
    /**
     * Lists all vivienda entities.
     *
     * @Route("/", name="vivienda_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $viviendas = $em->getRepository('IfeeBundle:Vivienda')->findAll();

        return $this->render('vivienda/index.html.twig', array(
            'viviendas' => $viviendas,
        ));
    }

    /**
     * Creates a new vivienda entity.
     *
     * @Route("/new", name="vivienda_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vivienda = new Vivienda();
        $form = $this->createForm('IfeeBundle\Form\ViviendaType', $vivienda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vivienda);
            $em->flush();

            return $this->redirectToRoute('vivienda_show', array('idVivienda' => $vivienda->getIdvivienda()));
        }

        return $this->render('vivienda/new.html.twig', array(
            'vivienda' => $vivienda,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vivienda entity.
     *
     * @Route("/{idVivienda}", name="vivienda_show")
     * @Method("GET")
     */
    public function showAction(Vivienda $vivienda)
    {
        $deleteForm = $this->createDeleteForm($vivienda);

        return $this->render('vivienda/show.html.twig', array(
            'vivienda' => $vivienda,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vivienda entity.
     *
     * @Route("/{idVivienda}/edit", name="vivienda_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Vivienda $vivienda)
    {
        $deleteForm = $this->createDeleteForm($vivienda);
        $editForm = $this->createForm('IfeeBundle\Form\ViviendaType', $vivienda);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vivienda_edit', array('idVivienda' => $vivienda->getIdvivienda()));
        }

        return $this->render('vivienda/edit.html.twig', array(
            'vivienda' => $vivienda,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vivienda entity.
     *
     * @Route("/{idVivienda}", name="vivienda_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Vivienda $vivienda)
    {
        $form = $this->createDeleteForm($vivienda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vivienda);
            $em->flush();
        }

        return $this->redirectToRoute('vivienda_index');
    }

    /**
     * Creates a form to delete a vivienda entity.
     *
     * @param Vivienda $vivienda The vivienda entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vivienda $vivienda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vivienda_delete', array('idVivienda' => $vivienda->getIdvivienda())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
