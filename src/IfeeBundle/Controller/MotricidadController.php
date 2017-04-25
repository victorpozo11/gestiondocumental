<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Motricidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Motricidad controller.
 *
 * @Route("motricidad")
 */
class MotricidadController extends Controller
{
    /**
     * Lists all motricidad entities.
     *
     * @Route("/", name="motricidad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $motricidads = $em->getRepository('IfeeBundle:Motricidad')->findAll();

        return $this->render('motricidad/index.html.twig', array(
            'motricidads' => $motricidads,
        ));
    }

    /**
     * Creates a new motricidad entity.
     *
     * @Route("/new", name="motricidad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $motricidad = new Motricidad();
        $form = $this->createForm('IfeeBundle\Form\MotricidadType', $motricidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($motricidad);
            $em->flush();

            return $this->redirectToRoute('motricidad_show', array('idMotricidad' => $motricidad->getIdmotricidad()));
        }

        return $this->render('motricidad/new.html.twig', array(
            'motricidad' => $motricidad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a motricidad entity.
     *
     * @Route("/{idMotricidad}", name="motricidad_show")
     * @Method("GET")
     */
    public function showAction(Motricidad $motricidad)
    {
        $deleteForm = $this->createDeleteForm($motricidad);

        return $this->render('motricidad/show.html.twig', array(
            'motricidad' => $motricidad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing motricidad entity.
     *
     * @Route("/{idMotricidad}/edit", name="motricidad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Motricidad $motricidad)
    {
        $deleteForm = $this->createDeleteForm($motricidad);
        $editForm = $this->createForm('IfeeBundle\Form\MotricidadType', $motricidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('motricidad_edit', array('idMotricidad' => $motricidad->getIdmotricidad()));
        }

        return $this->render('motricidad/edit.html.twig', array(
            'motricidad' => $motricidad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a motricidad entity.
     *
     * @Route("/{idMotricidad}", name="motricidad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Motricidad $motricidad)
    {
        $form = $this->createDeleteForm($motricidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($motricidad);
            $em->flush();
        }

        return $this->redirectToRoute('motricidad_index');
    }

    /**
     * Creates a form to delete a motricidad entity.
     *
     * @param Motricidad $motricidad The motricidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Motricidad $motricidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('motricidad_delete', array('idMotricidad' => $motricidad->getIdmotricidad())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
