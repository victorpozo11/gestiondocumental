<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\Ldap;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ldap controller.
 *
 * @Route("ldap")
 */
class LdapController extends Controller
{
    /**
     * Lists all ldap entities.
     *
     * @Route("/", name="ldap_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ldaps = $em->getRepository('IfeeBundle:Ldap')->findAll();

        return $this->render('ldap/index.html.twig', array(
            'ldaps' => $ldaps,
        ));
    }

    /**
     * Creates a new ldap entity.
     *
     * @Route("/new", name="ldap_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ldap = new Ldap();
        $form = $this->createForm('IfeeBundle\Form\LdapType', $ldap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ldap);
            $em->flush();

            return $this->redirectToRoute('ldap_show', array('idLdap' => $ldap->getIdldap()));
        }

        return $this->render('ldap/new.html.twig', array(
            'ldap' => $ldap,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ldap entity.
     *
     * @Route("/{idLdap}", name="ldap_show")
     * @Method("GET")
     */
    public function showAction(Ldap $ldap)
    {
        $deleteForm = $this->createDeleteForm($ldap);

        return $this->render('ldap/show.html.twig', array(
            'ldap' => $ldap,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ldap entity.
     *
     * @Route("/{idLdap}/edit", name="ldap_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ldap $ldap)
    {
        $deleteForm = $this->createDeleteForm($ldap);
        $editForm = $this->createForm('IfeeBundle\Form\LdapType', $ldap);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ldap_edit', array('idLdap' => $ldap->getIdldap()));
        }

        return $this->render('ldap/edit.html.twig', array(
            'ldap' => $ldap,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ldap entity.
     *
     * @Route("/{idLdap}", name="ldap_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ldap $ldap)
    {
        $form = $this->createDeleteForm($ldap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ldap);
            $em->flush();
        }

        return $this->redirectToRoute('ldap_index');
    }

    /**
     * Creates a form to delete a ldap entity.
     *
     * @param Ldap $ldap The ldap entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ldap $ldap)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ldap_delete', array('idLdap' => $ldap->getIdldap())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
