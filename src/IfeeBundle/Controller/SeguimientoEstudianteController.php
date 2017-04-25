<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\SeguimientoEstudiante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Seguimientoestudiante controller.
 *
 * @Route("seguimientoestudiante")
 */
class SeguimientoEstudianteController extends Controller
{
    /**
     * Lists all seguimientoEstudiante entities.
     *
     * @Route("/", name="seguimientoestudiante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $seguimientoEstudiantes = $em->getRepository('IfeeBundle:SeguimientoEstudiante')->findAll();

        return $this->render('seguimientoestudiante/index.html.twig', array(
            'seguimientoEstudiantes' => $seguimientoEstudiantes,
        ));
    }

    /**
     * Creates a new seguimientoEstudiante entity.
     *
     * @Route("/new", name="seguimientoestudiante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $seguimientoEstudiante = new Seguimientoestudiante();
        $form = $this->createForm('IfeeBundle\Form\SeguimientoEstudianteType', $seguimientoEstudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($seguimientoEstudiante);
            $em->flush();

            return $this->redirectToRoute('seguimientoestudiante_show', array('idSeguimiento' => $seguimientoEstudiante->getIdseguimiento()));
        }

        return $this->render('seguimientoestudiante/new.html.twig', array(
            'seguimientoEstudiante' => $seguimientoEstudiante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a seguimientoEstudiante entity.
     *
     * @Route("/{idSeguimiento}", name="seguimientoestudiante_show")
     * @Method("GET")
     */
    public function showAction(SeguimientoEstudiante $seguimientoEstudiante)
    {
        $deleteForm = $this->createDeleteForm($seguimientoEstudiante);

        return $this->render('seguimientoestudiante/show.html.twig', array(
            'seguimientoEstudiante' => $seguimientoEstudiante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing seguimientoEstudiante entity.
     *
     * @Route("/{idSeguimiento}/edit", name="seguimientoestudiante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SeguimientoEstudiante $seguimientoEstudiante)
    {
        $deleteForm = $this->createDeleteForm($seguimientoEstudiante);
        $editForm = $this->createForm('IfeeBundle\Form\SeguimientoEstudianteType', $seguimientoEstudiante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('seguimientoestudiante_edit', array('idSeguimiento' => $seguimientoEstudiante->getIdseguimiento()));
        }

        return $this->render('seguimientoestudiante/edit.html.twig', array(
            'seguimientoEstudiante' => $seguimientoEstudiante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a seguimientoEstudiante entity.
     *
     * @Route("/{idSeguimiento}", name="seguimientoestudiante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SeguimientoEstudiante $seguimientoEstudiante)
    {
        $form = $this->createDeleteForm($seguimientoEstudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($seguimientoEstudiante);
            $em->flush();
        }

        return $this->redirectToRoute('seguimientoestudiante_index');
    }

    /**
     * Creates a form to delete a seguimientoEstudiante entity.
     *
     * @param SeguimientoEstudiante $seguimientoEstudiante The seguimientoEstudiante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SeguimientoEstudiante $seguimientoEstudiante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('seguimientoestudiante_delete', array('idSeguimiento' => $seguimientoEstudiante->getIdseguimiento())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
