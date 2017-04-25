<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Conducta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Conductum controller.
 *
 * @Route("conducta")
 */
class ConductaController extends Controller
{
    /**
     * Lists all conductum entities.
     *
     * @Route("/", name="conducta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conductas = $em->getRepository('IfeeBundle:Conducta')->findAll();

        return $this->render('conducta/index.html.twig', array(
            'conductas' => $conductas,
        ));
    }

    /**
     * Creates a new conductum entity.
     *
     * @Route("/new", name="conducta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $conductum = new Conductum();
        $form = $this->createForm('IfeeBundle\Form\ConductaType', $conductum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conductum);
            $em->flush();

            return $this->redirectToRoute('conducta_show', array('idConducta' => $conductum->getIdconducta()));
        }

        return $this->render('conducta/new.html.twig', array(
            'conductum' => $conductum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a conductum entity.
     *
     * @Route("/{idConducta}", name="conducta_show")
     * @Method("GET")
     */
    public function showAction(Conducta $conductum)
    {
        $deleteForm = $this->createDeleteForm($conductum);

        return $this->render('conducta/show.html.twig', array(
            'conductum' => $conductum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing conductum entity.
     *
     * @Route("/{idConducta}/edit", name="conducta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conducta $conductum)
    {
        $deleteForm = $this->createDeleteForm($conductum);
        $editForm = $this->createForm('IfeeBundle\Form\ConductaType', $conductum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conducta_edit', array('idConducta' => $conductum->getIdconducta()));
        }

        return $this->render('conducta/edit.html.twig', array(
            'conductum' => $conductum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a conductum entity.
     *
     * @Route("/{idConducta}", name="conducta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Conducta $conductum)
    {
        $form = $this->createDeleteForm($conductum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($conductum);
            $em->flush();
        }

        return $this->redirectToRoute('conducta_index');
    }

    /**
     * Creates a form to delete a conductum entity.
     *
     * @param Conducta $conductum The conductum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conducta $conductum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conducta_delete', array('idConducta' => $conductum->getIdconducta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
