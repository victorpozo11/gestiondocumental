<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\AntecedentesPatologicos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Antecedentespatologico controller.
 *
 * @Route("antecedentespatologicos")
 */
class AntecedentesPatologicosController extends Controller
{
    /**
     * Lists all antecedentesPatologico entities.
     *
     * @Route("/", name="antecedentespatologicos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $antecedentesPatologicos = $em->getRepository('IfeeBundle:AntecedentesPatologicos')->findAll();

        return $this->render('antecedentespatologicos/index.html.twig', array(
            'antecedentesPatologicos' => $antecedentesPatologicos,
        ));
    }

    /**
     * Creates a new antecedentesPatologico entity.
     *
     * @Route("/new", name="antecedentespatologicos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $antecedentesPatologico = new Antecedentespatologico();
        $form = $this->createForm('IfeeBundle\Form\AntecedentesPatologicosType', $antecedentesPatologico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($antecedentesPatologico);
            $em->flush();

            return $this->redirectToRoute('antecedentespatologicos_show', array('idAntecedentesPatologicos' => $antecedentesPatologico->getIdantecedentespatologicos()));
        }

        return $this->render('antecedentespatologicos/new.html.twig', array(
            'antecedentesPatologico' => $antecedentesPatologico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a antecedentesPatologico entity.
     *
     * @Route("/{idAntecedentesPatologicos}", name="antecedentespatologicos_show")
     * @Method("GET")
     */
    public function showAction(AntecedentesPatologicos $antecedentesPatologico)
    {
        $deleteForm = $this->createDeleteForm($antecedentesPatologico);

        return $this->render('antecedentespatologicos/show.html.twig', array(
            'antecedentesPatologico' => $antecedentesPatologico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing antecedentesPatologico entity.
     *
     * @Route("/{idAntecedentesPatologicos}/edit", name="antecedentespatologicos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AntecedentesPatologicos $antecedentesPatologico)
    {
        $deleteForm = $this->createDeleteForm($antecedentesPatologico);
        $editForm = $this->createForm('IfeeBundle\Form\AntecedentesPatologicosType', $antecedentesPatologico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('antecedentespatologicos_edit', array('idAntecedentesPatologicos' => $antecedentesPatologico->getIdantecedentespatologicos()));
        }

        return $this->render('antecedentespatologicos/edit.html.twig', array(
            'antecedentesPatologico' => $antecedentesPatologico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a antecedentesPatologico entity.
     *
     * @Route("/{idAntecedentesPatologicos}", name="antecedentespatologicos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AntecedentesPatologicos $antecedentesPatologico)
    {
        $form = $this->createDeleteForm($antecedentesPatologico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($antecedentesPatologico);
            $em->flush();
        }

        return $this->redirectToRoute('antecedentespatologicos_index');
    }

    /**
     * Creates a form to delete a antecedentesPatologico entity.
     *
     * @param AntecedentesPatologicos $antecedentesPatologico The antecedentesPatologico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AntecedentesPatologicos $antecedentesPatologico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('antecedentespatologicos_delete', array('idAntecedentesPatologicos' => $antecedentesPatologico->getIdantecedentespatologicos())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
