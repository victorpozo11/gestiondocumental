<?php

namespace IfeeBundle\Controller;

use IfeeBundle\Entity\EstructuraFamiliar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estructurafamiliar controller.
 *
 * @Route("estructurafamiliar")
 */
class EstructuraFamiliarController extends Controller
{
    /**
     * Lists all estructuraFamiliar entities.
     *
     * @Route("/", name="estructurafamiliar_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estructuraFamiliars = $em->getRepository('IfeeBundle:EstructuraFamiliar')->findAll();

        return $this->render('estructurafamiliar/index.html.twig', array(
            'estructuraFamiliars' => $estructuraFamiliars,
        ));
    }

    /**
     * Creates a new estructuraFamiliar entity.
     *
     * @Route("/new", name="estructurafamiliar_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estructuraFamiliar = new Estructurafamiliar();
        $form = $this->createForm('IfeeBundle\Form\EstructuraFamiliarType', $estructuraFamiliar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estructuraFamiliar);
            $em->flush();

            return $this->redirectToRoute('estructurafamiliar_show', array('idConvive' => $estructuraFamiliar->getIdconvive()));
        }

        return $this->render('estructurafamiliar/new.html.twig', array(
            'estructuraFamiliar' => $estructuraFamiliar,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estructuraFamiliar entity.
     *
     * @Route("/{idConvive}", name="estructurafamiliar_show")
     * @Method("GET")
     */
    public function showAction(EstructuraFamiliar $estructuraFamiliar)
    {
        $deleteForm = $this->createDeleteForm($estructuraFamiliar);

        return $this->render('estructurafamiliar/show.html.twig', array(
            'estructuraFamiliar' => $estructuraFamiliar,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estructuraFamiliar entity.
     *
     * @Route("/{idConvive}/edit", name="estructurafamiliar_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstructuraFamiliar $estructuraFamiliar)
    {
        $deleteForm = $this->createDeleteForm($estructuraFamiliar);
        $editForm = $this->createForm('IfeeBundle\Form\EstructuraFamiliarType', $estructuraFamiliar);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estructurafamiliar_edit', array('idConvive' => $estructuraFamiliar->getIdconvive()));
        }

        return $this->render('estructurafamiliar/edit.html.twig', array(
            'estructuraFamiliar' => $estructuraFamiliar,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estructuraFamiliar entity.
     *
     * @Route("/{idConvive}", name="estructurafamiliar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstructuraFamiliar $estructuraFamiliar)
    {
        $form = $this->createDeleteForm($estructuraFamiliar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estructuraFamiliar);
            $em->flush();
        }

        return $this->redirectToRoute('estructurafamiliar_index');
    }

    /**
     * Creates a form to delete a estructuraFamiliar entity.
     *
     * @param EstructuraFamiliar $estructuraFamiliar The estructuraFamiliar entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstructuraFamiliar $estructuraFamiliar)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estructurafamiliar_delete', array('idConvive' => $estructuraFamiliar->getIdconvive())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
