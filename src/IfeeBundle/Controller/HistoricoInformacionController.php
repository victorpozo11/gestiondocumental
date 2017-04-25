<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\HistoricoInformacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Historicoinformacion controller.
 *
 * @Route("historicoinformacion")
 */
class HistoricoInformacionController extends Controller
{
    /**
     * Lists all historicoInformacion entities.
     *
     * @Route("/", name="historicoinformacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historicoInformacions = $em->getRepository('IfeeBundle:HistoricoInformacion')->findAll();

        return $this->render('historicoinformacion/index.html.twig', array(
            'historicoInformacions' => $historicoInformacions,
        ));
    }

    /**
     * Creates a new historicoInformacion entity.
     *
     * @Route("/new", name="historicoinformacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $historicoInformacion = new Historicoinformacion();
        $form = $this->createForm('IfeeBundle\Form\HistoricoInformacionType', $historicoInformacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historicoInformacion);
            $em->flush();

            return $this->redirectToRoute('historicoinformacion_show', array('idHistorico' => $historicoInformacion->getIdhistorico()));
        }

        return $this->render('historicoinformacion/new.html.twig', array(
            'historicoInformacion' => $historicoInformacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a historicoInformacion entity.
     *
     * @Route("/{idHistorico}", name="historicoinformacion_show")
     * @Method("GET")
     */
    public function showAction(HistoricoInformacion $historicoInformacion)
    {
        $deleteForm = $this->createDeleteForm($historicoInformacion);

        return $this->render('historicoinformacion/show.html.twig', array(
            'historicoInformacion' => $historicoInformacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing historicoInformacion entity.
     *
     * @Route("/{idHistorico}/edit", name="historicoinformacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HistoricoInformacion $historicoInformacion)
    {
        $deleteForm = $this->createDeleteForm($historicoInformacion);
        $editForm = $this->createForm('IfeeBundle\Form\HistoricoInformacionType', $historicoInformacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('historicoinformacion_edit', array('idHistorico' => $historicoInformacion->getIdhistorico()));
        }

        return $this->render('historicoinformacion/edit.html.twig', array(
            'historicoInformacion' => $historicoInformacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a historicoInformacion entity.
     *
     * @Route("/{idHistorico}", name="historicoinformacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HistoricoInformacion $historicoInformacion)
    {
        $form = $this->createDeleteForm($historicoInformacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historicoInformacion);
            $em->flush();
        }

        return $this->redirectToRoute('historicoinformacion_index');
    }

    /**
     * Creates a form to delete a historicoInformacion entity.
     *
     * @param HistoricoInformacion $historicoInformacion The historicoInformacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistoricoInformacion $historicoInformacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historicoinformacion_delete', array('idHistorico' => $historicoInformacion->getIdhistorico())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
