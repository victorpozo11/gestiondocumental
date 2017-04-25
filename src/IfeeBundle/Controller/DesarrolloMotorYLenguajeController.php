<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\DesarrolloMotorYLenguaje;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Desarrollomotorylenguaje controller.
 *
 * @Route("desarrollomotorylenguaje")
 */
class DesarrolloMotorYLenguajeController extends Controller
{
    /**
     * Lists all desarrolloMotorYLenguaje entities.
     *
     * @Route("/", name="desarrollomotorylenguaje_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $desarrolloMotorYLenguajes = $em->getRepository('IfeeBundle:DesarrolloMotorYLenguaje')->findAll();

        return $this->render('desarrollomotorylenguaje/index.html.twig', array(
            'desarrolloMotorYLenguajes' => $desarrolloMotorYLenguajes,
        ));
    }

    /**
     * Creates a new desarrolloMotorYLenguaje entity.
     *
     * @Route("/new", name="desarrollomotorylenguaje_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $desarrolloMotorYLenguaje = new Desarrollomotorylenguaje();
        $form = $this->createForm('IfeeBundle\Form\DesarrolloMotorYLenguajeType', $desarrolloMotorYLenguaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($desarrolloMotorYLenguaje);
            $em->flush();

            return $this->redirectToRoute('desarrollomotorylenguaje_show', array('idDesarrolloMotor' => $desarrolloMotorYLenguaje->getIddesarrollomotor()));
        }

        return $this->render('desarrollomotorylenguaje/new.html.twig', array(
            'desarrolloMotorYLenguaje' => $desarrolloMotorYLenguaje,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a desarrolloMotorYLenguaje entity.
     *
     * @Route("/{idDesarrolloMotor}", name="desarrollomotorylenguaje_show")
     * @Method("GET")
     */
    public function showAction(DesarrolloMotorYLenguaje $desarrolloMotorYLenguaje)
    {
        $deleteForm = $this->createDeleteForm($desarrolloMotorYLenguaje);

        return $this->render('desarrollomotorylenguaje/show.html.twig', array(
            'desarrolloMotorYLenguaje' => $desarrolloMotorYLenguaje,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing desarrolloMotorYLenguaje entity.
     *
     * @Route("/{idDesarrolloMotor}/edit", name="desarrollomotorylenguaje_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DesarrolloMotorYLenguaje $desarrolloMotorYLenguaje)
    {
        $deleteForm = $this->createDeleteForm($desarrolloMotorYLenguaje);
        $editForm = $this->createForm('IfeeBundle\Form\DesarrolloMotorYLenguajeType', $desarrolloMotorYLenguaje);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('desarrollomotorylenguaje_edit', array('idDesarrolloMotor' => $desarrolloMotorYLenguaje->getIddesarrollomotor()));
        }

        return $this->render('desarrollomotorylenguaje/edit.html.twig', array(
            'desarrolloMotorYLenguaje' => $desarrolloMotorYLenguaje,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a desarrolloMotorYLenguaje entity.
     *
     * @Route("/{idDesarrolloMotor}", name="desarrollomotorylenguaje_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DesarrolloMotorYLenguaje $desarrolloMotorYLenguaje)
    {
        $form = $this->createDeleteForm($desarrolloMotorYLenguaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($desarrolloMotorYLenguaje);
            $em->flush();
        }

        return $this->redirectToRoute('desarrollomotorylenguaje_index');
    }

    /**
     * Creates a form to delete a desarrolloMotorYLenguaje entity.
     *
     * @param DesarrolloMotorYLenguaje $desarrolloMotorYLenguaje The desarrolloMotorYLenguaje entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DesarrolloMotorYLenguaje $desarrolloMotorYLenguaje)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('desarrollomotorylenguaje_delete', array('idDesarrolloMotor' => $desarrolloMotorYLenguaje->getIddesarrollomotor())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
