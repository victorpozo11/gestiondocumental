<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\EgresosSituacionEconomica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Egresossituacioneconomica controller.
 *
 * @Route("egresossituacioneconomica")
 */
class EgresosSituacionEconomicaController extends Controller
{
    /**
     * Lists all egresosSituacionEconomica entities.
     *
     * @Route("/", name="egresossituacioneconomica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $egresosSituacionEconomicas = $em->getRepository('IfeeBundle:EgresosSituacionEconomica')->findAll();

        return $this->render('egresossituacioneconomica/index.html.twig', array(
            'egresosSituacionEconomicas' => $egresosSituacionEconomicas,
        ));
    }

    /**
     * Creates a new egresosSituacionEconomica entity.
     *
     * @Route("/new", name="egresossituacioneconomica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $egresosSituacionEconomica = new Egresossituacioneconomica();
        $form = $this->createForm('IfeeBundle\Form\EgresosSituacionEconomicaType', $egresosSituacionEconomica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($egresosSituacionEconomica);
            $em->flush();

            return $this->redirectToRoute('egresossituacioneconomica_show', array('idEgresos' => $egresosSituacionEconomica->getIdegresos()));
        }

        return $this->render('egresossituacioneconomica/new.html.twig', array(
            'egresosSituacionEconomica' => $egresosSituacionEconomica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a egresosSituacionEconomica entity.
     *
     * @Route("/{idEgresos}", name="egresossituacioneconomica_show")
     * @Method("GET")
     */
    public function showAction(EgresosSituacionEconomica $egresosSituacionEconomica)
    {
        $deleteForm = $this->createDeleteForm($egresosSituacionEconomica);

        return $this->render('egresossituacioneconomica/show.html.twig', array(
            'egresosSituacionEconomica' => $egresosSituacionEconomica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing egresosSituacionEconomica entity.
     *
     * @Route("/{idEgresos}/edit", name="egresossituacioneconomica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EgresosSituacionEconomica $egresosSituacionEconomica)
    {
        $deleteForm = $this->createDeleteForm($egresosSituacionEconomica);
        $editForm = $this->createForm('IfeeBundle\Form\EgresosSituacionEconomicaType', $egresosSituacionEconomica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('egresossituacioneconomica_edit', array('idEgresos' => $egresosSituacionEconomica->getIdegresos()));
        }

        return $this->render('egresossituacioneconomica/edit.html.twig', array(
            'egresosSituacionEconomica' => $egresosSituacionEconomica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a egresosSituacionEconomica entity.
     *
     * @Route("/{idEgresos}", name="egresossituacioneconomica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EgresosSituacionEconomica $egresosSituacionEconomica)
    {
        $form = $this->createDeleteForm($egresosSituacionEconomica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($egresosSituacionEconomica);
            $em->flush();
        }

        return $this->redirectToRoute('egresossituacioneconomica_index');
    }

    /**
     * Creates a form to delete a egresosSituacionEconomica entity.
     *
     * @param EgresosSituacionEconomica $egresosSituacionEconomica The egresosSituacionEconomica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EgresosSituacionEconomica $egresosSituacionEconomica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('egresossituacioneconomica_delete', array('idEgresos' => $egresosSituacionEconomica->getIdegresos())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
