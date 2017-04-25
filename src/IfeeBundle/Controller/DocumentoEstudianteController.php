<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\DocumentoEstudiante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Documentoestudiante controller.
 *
 * @Route("documentoestudiante")
 */
class DocumentoEstudianteController extends Controller
{
    /**
     * Lists all documentoEstudiante entities.
     *
     * @Route("/", name="documentoestudiante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentoEstudiantes = $em->getRepository('IfeeBundle:DocumentoEstudiante')->findAll();

        return $this->render('documentoestudiante/index.html.twig', array(
            'documentoEstudiantes' => $documentoEstudiantes,
        ));
    }

    /**
     * Creates a new documentoEstudiante entity.
     *
     * @Route("/new", name="documentoestudiante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $documentoEstudiante = new Documentoestudiante();
        $form = $this->createForm('IfeeBundle\Form\DocumentoEstudianteType', $documentoEstudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($documentoEstudiante);
            $em->flush();

            return $this->redirectToRoute('documentoestudiante_show', array('idDocumento' => $documentoEstudiante->getIddocumento()));
        }

        return $this->render('documentoestudiante/new.html.twig', array(
            'documentoEstudiante' => $documentoEstudiante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a documentoEstudiante entity.
     *
     * @Route("/{idDocumento}", name="documentoestudiante_show")
     * @Method("GET")
     */
    public function showAction(DocumentoEstudiante $documentoEstudiante)
    {
        $deleteForm = $this->createDeleteForm($documentoEstudiante);

        return $this->render('documentoestudiante/show.html.twig', array(
            'documentoEstudiante' => $documentoEstudiante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing documentoEstudiante entity.
     *
     * @Route("/{idDocumento}/edit", name="documentoestudiante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DocumentoEstudiante $documentoEstudiante)
    {
        $deleteForm = $this->createDeleteForm($documentoEstudiante);
        $editForm = $this->createForm('IfeeBundle\Form\DocumentoEstudianteType', $documentoEstudiante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('documentoestudiante_edit', array('idDocumento' => $documentoEstudiante->getIddocumento()));
        }

        return $this->render('documentoestudiante/edit.html.twig', array(
            'documentoEstudiante' => $documentoEstudiante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a documentoEstudiante entity.
     *
     * @Route("/{idDocumento}", name="documentoestudiante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DocumentoEstudiante $documentoEstudiante)
    {
        $form = $this->createDeleteForm($documentoEstudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documentoEstudiante);
            $em->flush();
        }

        return $this->redirectToRoute('documentoestudiante_index');
    }

    /**
     * Creates a form to delete a documentoEstudiante entity.
     *
     * @param DocumentoEstudiante $documentoEstudiante The documentoEstudiante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DocumentoEstudiante $documentoEstudiante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentoestudiante_delete', array('idDocumento' => $documentoEstudiante->getIddocumento())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
