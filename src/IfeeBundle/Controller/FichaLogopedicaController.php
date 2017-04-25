<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\FichaLogopedica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fichalogopedica controller.
 *
 * @Route("fichalogopedica")
 */
class FichaLogopedicaController extends Controller
{
    /**
     * Lists all fichaLogopedica entities.
     *
     * @Route("/", name="fichalogopedica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichaLogopedicas = $em->getRepository('IfeeBundle:FichaLogopedica')->findAll();

        return $this->render('fichalogopedica/index.html.twig', array(
            'fichaLogopedicas' => $fichaLogopedicas,
        ));
    }

    /**
     * Creates a new fichaLogopedica entity.
     *
     * @Route("/new", name="fichalogopedica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fichaLogopedica = new Fichalogopedica();
        $form = $this->createForm('IfeeBundle\Form\FichaLogopedicaType', $fichaLogopedica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fichaLogopedica);
            $em->flush();

            return $this->redirectToRoute('fichalogopedica_show', array('idLogopedica' => $fichaLogopedica->getIdlogopedica()));
        }

        return $this->render('fichalogopedica/new.html.twig', array(
            'fichaLogopedica' => $fichaLogopedica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fichaLogopedica entity.
     *
     * @Route("/{idLogopedica}", name="fichalogopedica_show")
     * @Method("GET")
     */
    public function showAction(FichaLogopedica $fichaLogopedica)
    {
        $deleteForm = $this->createDeleteForm($fichaLogopedica);

        return $this->render('fichalogopedica/show.html.twig', array(
            'fichaLogopedica' => $fichaLogopedica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fichaLogopedica entity.
     *
     * @Route("/{idLogopedica}/edit", name="fichalogopedica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FichaLogopedica $fichaLogopedica)
    {
        $deleteForm = $this->createDeleteForm($fichaLogopedica);
        $editForm = $this->createForm('IfeeBundle\Form\FichaLogopedicaType', $fichaLogopedica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fichalogopedica_edit', array('idLogopedica' => $fichaLogopedica->getIdlogopedica()));
        }

        return $this->render('fichalogopedica/edit.html.twig', array(
            'fichaLogopedica' => $fichaLogopedica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fichaLogopedica entity.
     *
     * @Route("/{idLogopedica}", name="fichalogopedica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FichaLogopedica $fichaLogopedica)
    {
        $form = $this->createDeleteForm($fichaLogopedica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fichaLogopedica);
            $em->flush();
        }

        return $this->redirectToRoute('fichalogopedica_index');
    }

    /**
     * Creates a form to delete a fichaLogopedica entity.
     *
     * @param FichaLogopedica $fichaLogopedica The fichaLogopedica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FichaLogopedica $fichaLogopedica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichalogopedica_delete', array('idLogopedica' => $fichaLogopedica->getIdlogopedica())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
