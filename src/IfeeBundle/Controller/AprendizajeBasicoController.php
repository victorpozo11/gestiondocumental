<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\AprendizajeBasico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Aprendizajebasico controller.
 *
 * @Route("aprendizajebasico")
 */
class AprendizajeBasicoController extends Controller
{
    /**
     * Lists all aprendizajeBasico entities.
     *
     * @Route("/", name="aprendizajebasico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aprendizajeBasicos = $em->getRepository('IfeeBundle:AprendizajeBasico')->findAll();

        return $this->render('aprendizajebasico/index.html.twig', array(
            'aprendizajeBasicos' => $aprendizajeBasicos,
        ));
    }

    /**
     * Creates a new aprendizajeBasico entity.
     *
     * @Route("/new", name="aprendizajebasico_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aprendizajeBasico = new Aprendizajebasico();
        $form = $this->createForm('IfeeBundle\Form\AprendizajeBasicoType', $aprendizajeBasico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aprendizajeBasico);
            $em->flush();

            return $this->redirectToRoute('aprendizajebasico_show', array('idAprendizaje' => $aprendizajeBasico->getIdaprendizaje()));
        }

        return $this->render('aprendizajebasico/new.html.twig', array(
            'aprendizajeBasico' => $aprendizajeBasico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a aprendizajeBasico entity.
     *
     * @Route("/{idAprendizaje}", name="aprendizajebasico_show")
     * @Method("GET")
     */
    public function showAction(AprendizajeBasico $aprendizajeBasico)
    {
        $deleteForm = $this->createDeleteForm($aprendizajeBasico);

        return $this->render('aprendizajebasico/show.html.twig', array(
            'aprendizajeBasico' => $aprendizajeBasico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing aprendizajeBasico entity.
     *
     * @Route("/{idAprendizaje}/edit", name="aprendizajebasico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AprendizajeBasico $aprendizajeBasico)
    {
        $deleteForm = $this->createDeleteForm($aprendizajeBasico);
        $editForm = $this->createForm('IfeeBundle\Form\AprendizajeBasicoType', $aprendizajeBasico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aprendizajebasico_edit', array('idAprendizaje' => $aprendizajeBasico->getIdaprendizaje()));
        }

        return $this->render('aprendizajebasico/edit.html.twig', array(
            'aprendizajeBasico' => $aprendizajeBasico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a aprendizajeBasico entity.
     *
     * @Route("/{idAprendizaje}", name="aprendizajebasico_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AprendizajeBasico $aprendizajeBasico)
    {
        $form = $this->createDeleteForm($aprendizajeBasico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aprendizajeBasico);
            $em->flush();
        }

        return $this->redirectToRoute('aprendizajebasico_index');
    }

    /**
     * Creates a form to delete a aprendizajeBasico entity.
     *
     * @param AprendizajeBasico $aprendizajeBasico The aprendizajeBasico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AprendizajeBasico $aprendizajeBasico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('aprendizajebasico_delete', array('idAprendizaje' => $aprendizajeBasico->getIdaprendizaje())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
