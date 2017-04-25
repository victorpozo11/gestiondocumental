<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\TrazaUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trazauser controller.
 *
 * @Route("trazauser")
 */
class TrazaUserController extends Controller
{
    /**
     * Lists all trazaUser entities.
     *
     * @Route("/", name="trazauser_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trazaUsers = $em->getRepository('IfeeBundle:TrazaUser')->findAll();

        return $this->render('trazauser/index.html.twig', array(
            'trazaUsers' => $trazaUsers,
        ));
    }

    /**
     * Creates a new trazaUser entity.
     *
     * @Route("/new", name="trazauser_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trazaUser = new Trazauser();
        $form = $this->createForm('IfeeBundle\Form\TrazaUserType', $trazaUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trazaUser);
            $em->flush();

            return $this->redirectToRoute('trazauser_show', array('idTraza' => $trazaUser->getIdtraza()));
        }

        return $this->render('trazauser/new.html.twig', array(
            'trazaUser' => $trazaUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trazaUser entity.
     *
     * @Route("/{idTraza}", name="trazauser_show")
     * @Method("GET")
     */
    public function showAction(TrazaUser $trazaUser)
    {
        $deleteForm = $this->createDeleteForm($trazaUser);

        return $this->render('trazauser/show.html.twig', array(
            'trazaUser' => $trazaUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trazaUser entity.
     *
     * @Route("/{idTraza}/edit", name="trazauser_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrazaUser $trazaUser)
    {
        $deleteForm = $this->createDeleteForm($trazaUser);
        $editForm = $this->createForm('IfeeBundle\Form\TrazaUserType', $trazaUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trazauser_edit', array('idTraza' => $trazaUser->getIdtraza()));
        }

        return $this->render('trazauser/edit.html.twig', array(
            'trazaUser' => $trazaUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trazaUser entity.
     *
     * @Route("/{idTraza}", name="trazauser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrazaUser $trazaUser)
    {
        $form = $this->createDeleteForm($trazaUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trazaUser);
            $em->flush();
        }

        return $this->redirectToRoute('trazauser_index');
    }

    /**
     * Creates a form to delete a trazaUser entity.
     *
     * @param TrazaUser $trazaUser The trazaUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrazaUser $trazaUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trazauser_delete', array('idTraza' => $trazaUser->getIdtraza())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
