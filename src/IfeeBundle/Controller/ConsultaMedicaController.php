<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\ConsultaMedica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Consultamedica controller.
 *
 * @Route("consultamedica")
 */
class ConsultaMedicaController extends Controller
{
    /**
     * Lists all consultaMedica entities.
     *
     * @Route("/", name="consultamedica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $consultaMedicas = $em->getRepository('IfeeBundle:ConsultaMedica')->findAll();

        return $this->render('consultamedica/index.html.twig', array(
            'consultaMedicas' => $consultaMedicas,
        ));
    }

    /**
     * Creates a new consultaMedica entity.
     *
     * @Route("/new", name="consultamedica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $consultaMedica = new Consultamedica();
        $form = $this->createForm('IfeeBundle\Form\ConsultaMedicaType', $consultaMedica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultaMedica);
            $em->flush();

            return $this->redirectToRoute('consultamedica_show', array('idConsulta' => $consultaMedica->getIdconsulta()));
        }

        return $this->render('consultamedica/new.html.twig', array(
            'consultaMedica' => $consultaMedica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a consultaMedica entity.
     *
     * @Route("/{idConsulta}", name="consultamedica_show")
     * @Method("GET")
     */
    public function showAction(ConsultaMedica $consultaMedica)
    {
        $deleteForm = $this->createDeleteForm($consultaMedica);

        return $this->render('consultamedica/show.html.twig', array(
            'consultaMedica' => $consultaMedica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing consultaMedica entity.
     *
     * @Route("/{idConsulta}/edit", name="consultamedica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ConsultaMedica $consultaMedica)
    {
        $deleteForm = $this->createDeleteForm($consultaMedica);
        $editForm = $this->createForm('IfeeBundle\Form\ConsultaMedicaType', $consultaMedica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('consultamedica_edit', array('idConsulta' => $consultaMedica->getIdconsulta()));
        }

        return $this->render('consultamedica/edit.html.twig', array(
            'consultaMedica' => $consultaMedica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a consultaMedica entity.
     *
     * @Route("/{idConsulta}", name="consultamedica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ConsultaMedica $consultaMedica)
    {
        $form = $this->createDeleteForm($consultaMedica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($consultaMedica);
            $em->flush();
        }

        return $this->redirectToRoute('consultamedica_index');
    }

    /**
     * Creates a form to delete a consultaMedica entity.
     *
     * @param ConsultaMedica $consultaMedica The consultaMedica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ConsultaMedica $consultaMedica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consultamedica_delete', array('idConsulta' => $consultaMedica->getIdconsulta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
