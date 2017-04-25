<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\EstructuraYFuncionOral;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estructurayfuncionoral controller.
 *
 * @Route("estructurayfuncionoral")
 */
class EstructuraYFuncionOralController extends Controller
{
    /**
     * Lists all estructuraYFuncionOral entities.
     *
     * @Route("/", name="estructurayfuncionoral_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estructuraYFuncionOrals = $em->getRepository('IfeeBundle:EstructuraYFuncionOral')->findAll();

        return $this->render('estructurayfuncionoral/index.html.twig', array(
            'estructuraYFuncionOrals' => $estructuraYFuncionOrals,
        ));
    }

    /**
     * Creates a new estructuraYFuncionOral entity.
     *
     * @Route("/new", name="estructurayfuncionoral_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estructuraYFuncionOral = new Estructurayfuncionoral();
        $form = $this->createForm('IfeeBundle\Form\EstructuraYFuncionOralType', $estructuraYFuncionOral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estructuraYFuncionOral);
            $em->flush();

            return $this->redirectToRoute('estructurayfuncionoral_show', array('idEstructuraYFuncionOral' => $estructuraYFuncionOral->getIdestructurayfuncionoral()));
        }

        return $this->render('estructurayfuncionoral/new.html.twig', array(
            'estructuraYFuncionOral' => $estructuraYFuncionOral,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estructuraYFuncionOral entity.
     *
     * @Route("/{idEstructuraYFuncionOral}", name="estructurayfuncionoral_show")
     * @Method("GET")
     */
    public function showAction(EstructuraYFuncionOral $estructuraYFuncionOral)
    {
        $deleteForm = $this->createDeleteForm($estructuraYFuncionOral);

        return $this->render('estructurayfuncionoral/show.html.twig', array(
            'estructuraYFuncionOral' => $estructuraYFuncionOral,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estructuraYFuncionOral entity.
     *
     * @Route("/{idEstructuraYFuncionOral}/edit", name="estructurayfuncionoral_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstructuraYFuncionOral $estructuraYFuncionOral)
    {
        $deleteForm = $this->createDeleteForm($estructuraYFuncionOral);
        $editForm = $this->createForm('IfeeBundle\Form\EstructuraYFuncionOralType', $estructuraYFuncionOral);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estructurayfuncionoral_edit', array('idEstructuraYFuncionOral' => $estructuraYFuncionOral->getIdestructurayfuncionoral()));
        }

        return $this->render('estructurayfuncionoral/edit.html.twig', array(
            'estructuraYFuncionOral' => $estructuraYFuncionOral,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estructuraYFuncionOral entity.
     *
     * @Route("/{idEstructuraYFuncionOral}", name="estructurayfuncionoral_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstructuraYFuncionOral $estructuraYFuncionOral)
    {
        $form = $this->createDeleteForm($estructuraYFuncionOral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estructuraYFuncionOral);
            $em->flush();
        }

        return $this->redirectToRoute('estructurayfuncionoral_index');
    }

    /**
     * Creates a form to delete a estructuraYFuncionOral entity.
     *
     * @param EstructuraYFuncionOral $estructuraYFuncionOral The estructuraYFuncionOral entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstructuraYFuncionOral $estructuraYFuncionOral)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estructurayfuncionoral_delete', array('idEstructuraYFuncionOral' => $estructuraYFuncionOral->getIdestructurayfuncionoral())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
