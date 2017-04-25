<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Habilidades;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Habilidade controller.
 *
 * @Route("habilidades")
 */
class HabilidadesController extends Controller
{
    /**
     * Lists all habilidade entities.
     *
     * @Route("/", name="habilidades_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habilidades = $em->getRepository('IfeeBundle:Habilidades')->findAll();

        return $this->render('habilidades/index.html.twig', array(
            'habilidades' => $habilidades,
        ));
    }

    /**
     * Creates a new habilidade entity.
     *
     * @Route("/new", name="habilidades_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $habilidade = new Habilidade();
        $form = $this->createForm('IfeeBundle\Form\HabilidadesType', $habilidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habilidade);
            $em->flush();

            return $this->redirectToRoute('habilidades_show', array('idHabilidad' => $habilidade->getIdhabilidad()));
        }

        return $this->render('habilidades/new.html.twig', array(
            'habilidade' => $habilidade,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a habilidade entity.
     *
     * @Route("/{idHabilidad}", name="habilidades_show")
     * @Method("GET")
     */
    public function showAction(Habilidades $habilidade)
    {
        $deleteForm = $this->createDeleteForm($habilidade);

        return $this->render('habilidades/show.html.twig', array(
            'habilidade' => $habilidade,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing habilidade entity.
     *
     * @Route("/{idHabilidad}/edit", name="habilidades_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habilidades $habilidade)
    {
        $deleteForm = $this->createDeleteForm($habilidade);
        $editForm = $this->createForm('IfeeBundle\Form\HabilidadesType', $habilidade);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habilidades_edit', array('idHabilidad' => $habilidade->getIdhabilidad()));
        }

        return $this->render('habilidades/edit.html.twig', array(
            'habilidade' => $habilidade,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a habilidade entity.
     *
     * @Route("/{idHabilidad}", name="habilidades_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Habilidades $habilidade)
    {
        $form = $this->createDeleteForm($habilidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habilidade);
            $em->flush();
        }

        return $this->redirectToRoute('habilidades_index');
    }

    /**
     * Creates a form to delete a habilidade entity.
     *
     * @param Habilidades $habilidade The habilidade entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habilidades $habilidade)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habilidades_delete', array('idHabilidad' => $habilidade->getIdhabilidad())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
