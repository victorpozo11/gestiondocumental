<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\PersonaContacto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Personacontacto controller.
 *
 * @Route("personacontacto")
 */
class PersonaContactoController extends Controller
{
    /**
     * Lists all personaContacto entities.
     *
     * @Route("/", name="personacontacto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personaContactos = $em->getRepository('IfeeBundle:PersonaContacto')->findAll();

        return $this->render('personacontacto/index.html.twig', array(
            'personaContactos' => $personaContactos,
        ));
    }

    /**
     * Creates a new personaContacto entity.
     *
     * @Route("/new", name="personacontacto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $personaContacto = new Personacontacto();
        $form = $this->createForm('IfeeBundle\Form\PersonaContactoType', $personaContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personaContacto);
            $em->flush();

            return $this->redirectToRoute('personacontacto_show', array('idContacto' => $personaContacto->getIdcontacto()));
        }

        return $this->render('personacontacto/new.html.twig', array(
            'personaContacto' => $personaContacto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personaContacto entity.
     *
     * @Route("/{idContacto}", name="personacontacto_show")
     * @Method("GET")
     */
    public function showAction(PersonaContacto $personaContacto)
    {
        $deleteForm = $this->createDeleteForm($personaContacto);

        return $this->render('personacontacto/show.html.twig', array(
            'personaContacto' => $personaContacto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personaContacto entity.
     *
     * @Route("/{idContacto}/edit", name="personacontacto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PersonaContacto $personaContacto)
    {
        $deleteForm = $this->createDeleteForm($personaContacto);
        $editForm = $this->createForm('IfeeBundle\Form\PersonaContactoType', $personaContacto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personacontacto_edit', array('idContacto' => $personaContacto->getIdcontacto()));
        }

        return $this->render('personacontacto/edit.html.twig', array(
            'personaContacto' => $personaContacto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personaContacto entity.
     *
     * @Route("/{idContacto}", name="personacontacto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PersonaContacto $personaContacto)
    {
        $form = $this->createDeleteForm($personaContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personaContacto);
            $em->flush();
        }

        return $this->redirectToRoute('personacontacto_index');
    }

    /**
     * Creates a form to delete a personaContacto entity.
     *
     * @param PersonaContacto $personaContacto The personaContacto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PersonaContacto $personaContacto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personacontacto_delete', array('idContacto' => $personaContacto->getIdcontacto())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
