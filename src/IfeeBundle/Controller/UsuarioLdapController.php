<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\UsuarioLdap;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Usuarioldap controller.
 *
 * @Route("usuarioldap")
 */
class UsuarioLdapController extends Controller
{
    /**
     * Lists all usuarioLdap entities.
     *
     * @Route("/", name="usuarioldap_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarioLdaps = $em->getRepository('IfeeBundle:UsuarioLdap')->findAll();

        return $this->render('usuarioldap/index.html.twig', array(
            'usuarioLdaps' => $usuarioLdaps,
        ));
    }

    /**
     * Creates a new usuarioLdap entity.
     *
     * @Route("/new", name="usuarioldap_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuarioLdap = new Usuarioldap();
        $form = $this->createForm('IfeeBundle\Form\UsuarioLdapType', $usuarioLdap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuarioLdap);
            $em->flush();

            return $this->redirectToRoute('usuarioldap_show', array('idUsuarioLdap' => $usuarioLdap->getIdusuarioldap()));
        }

        return $this->render('usuarioldap/new.html.twig', array(
            'usuarioLdap' => $usuarioLdap,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuarioLdap entity.
     *
     * @Route("/{idUsuarioLdap}", name="usuarioldap_show")
     * @Method("GET")
     */
    public function showAction(UsuarioLdap $usuarioLdap)
    {
        $deleteForm = $this->createDeleteForm($usuarioLdap);

        return $this->render('usuarioldap/show.html.twig', array(
            'usuarioLdap' => $usuarioLdap,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuarioLdap entity.
     *
     * @Route("/{idUsuarioLdap}/edit", name="usuarioldap_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UsuarioLdap $usuarioLdap)
    {
        $deleteForm = $this->createDeleteForm($usuarioLdap);
        $editForm = $this->createForm('IfeeBundle\Form\UsuarioLdapType', $usuarioLdap);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuarioldap_edit', array('idUsuarioLdap' => $usuarioLdap->getIdusuarioldap()));
        }

        return $this->render('usuarioldap/edit.html.twig', array(
            'usuarioLdap' => $usuarioLdap,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuarioLdap entity.
     *
     * @Route("/{idUsuarioLdap}", name="usuarioldap_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UsuarioLdap $usuarioLdap)
    {
        $form = $this->createDeleteForm($usuarioLdap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuarioLdap);
            $em->flush();
        }

        return $this->redirectToRoute('usuarioldap_index');
    }

    /**
     * Creates a form to delete a usuarioLdap entity.
     *
     * @param UsuarioLdap $usuarioLdap The usuarioLdap entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UsuarioLdap $usuarioLdap)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuarioldap_delete', array('idUsuarioLdap' => $usuarioLdap->getIdusuarioldap())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
