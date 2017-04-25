<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Antecedentes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Antecedente controller.
 *
 * @Route("antecedentes")
 */
class AntecedentesController extends Controller
{
    /**
     * Lists all antecedente entities.
     *
     * @Route("/", name="antecedentes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $antecedentes = $em->getRepository('IfeeBundle:Antecedentes')->findAll();

        return $this->render('antecedentes/index.html.twig', array(
            'antecedentes' => $antecedentes,
        ));
    }

    /**
     * Creates a new antecedente entity.
     *
     * @Route("/new", name="antecedentes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $antecedente = new Antecedentes();
        $form = $this->createForm('IfeeBundle\Form\AntecedentesType', $antecedente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($antecedente);
            $em->flush();

            return $this->redirectToRoute('antecedentes_show', array('idAntecedentes' => $antecedente->getIdantecedentes()));
        }

        return $this->render('antecedentes/new.html.twig', array(
            'antecedente' => $antecedente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a antecedente entity.
     *
     * @Route("/{idAntecedentes}", name="antecedentes_show")
     * @Method("GET")
     */
    public function showAction(Antecedentes $antecedente)
    {
        $deleteForm = $this->createDeleteForm($antecedente);

        return $this->render('antecedentes/show.html.twig', array(
            'antecedente' => $antecedente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing antecedente entity.
     *
     * @Route("/{idAntecedentes}/edit", name="antecedentes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Antecedentes $antecedente)
    {
        $deleteForm = $this->createDeleteForm($antecedente);
        $editForm = $this->createForm('IfeeBundle\Form\AntecedentesType', $antecedente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('antecedentes_edit', array('idAntecedentes' => $antecedente->getIdantecedentes()));
        }

        return $this->render('antecedentes/edit.html.twig', array(
            'antecedente' => $antecedente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a antecedente entity.
     *
     * @Route("/{idAntecedentes}", name="antecedentes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Antecedentes $antecedente)
    {
        $form = $this->createDeleteForm($antecedente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($antecedente);
            $em->flush();
        }

        return $this->redirectToRoute('antecedentes_index');
    }

    /**
     * Creates a form to delete a antecedente entity.
     *
     * @param Antecedentes $antecedente The antecedente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Antecedentes $antecedente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('antecedentes_delete', array('idAntecedentes' => $antecedente->getIdantecedentes())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
