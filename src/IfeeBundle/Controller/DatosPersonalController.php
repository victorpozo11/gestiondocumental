<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\DatosPersonal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Datospersonal controller.
 *
 * @Route("datospersonal")
 */
class DatosPersonalController extends Controller
{
    /**
     * Lists all datosPersonal entities.
     *
     * @Route("/", name="datospersonal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $datosPersonals = $em->getRepository('IfeeBundle:DatosPersonal')->findAll();

        return $this->render('datospersonal/index.html.twig', array(
            'datosPersonals' => $datosPersonals,
        ));
    }

    /**
     * Creates a new datosPersonal entity.
     *
     * @Route("/new", name="datospersonal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $datosPersonal = new Datospersonal();
        $form = $this->createForm('IfeeBundle\Form\DatosPersonalType', $datosPersonal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($datosPersonal);
            $em->flush();

            return $this->redirectToRoute('datospersonal_show', array('idDatosPersonal' => $datosPersonal->getIddatospersonal()));
        }

        return $this->render('datospersonal/new.html.twig', array(
            'datosPersonal' => $datosPersonal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a datosPersonal entity.
     *
     * @Route("/{idDatosPersonal}", name="datospersonal_show")
     * @Method("GET")
     */
    public function showAction(DatosPersonal $datosPersonal)
    {
        $deleteForm = $this->createDeleteForm($datosPersonal);

        return $this->render('datospersonal/show.html.twig', array(
            'datosPersonal' => $datosPersonal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing datosPersonal entity.
     *
     * @Route("/{idDatosPersonal}/edit", name="datospersonal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DatosPersonal $datosPersonal)
    {
        $deleteForm = $this->createDeleteForm($datosPersonal);
        $editForm = $this->createForm('IfeeBundle\Form\DatosPersonalType', $datosPersonal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('datospersonal_edit', array('idDatosPersonal' => $datosPersonal->getIddatospersonal()));
        }

        return $this->render('datospersonal/edit.html.twig', array(
            'datosPersonal' => $datosPersonal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a datosPersonal entity.
     *
     * @Route("/{idDatosPersonal}", name="datospersonal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DatosPersonal $datosPersonal)
    {
        $form = $this->createDeleteForm($datosPersonal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($datosPersonal);
            $em->flush();
        }

        return $this->redirectToRoute('datospersonal_index');
    }

    /**
     * Creates a form to delete a datosPersonal entity.
     *
     * @param DatosPersonal $datosPersonal The datosPersonal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DatosPersonal $datosPersonal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('datospersonal_delete', array('idDatosPersonal' => $datosPersonal->getIddatospersonal())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
