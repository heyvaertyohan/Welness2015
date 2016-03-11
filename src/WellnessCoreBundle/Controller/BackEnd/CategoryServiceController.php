<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\CategoryService;
use WellnessCoreBundle\Form\CategoryServiceType;

/**
 * CategoryService controller.
 *
 */
class CategoryServiceController extends Controller
{

    /**
     * Lists all CategoryService entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CategoryService entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CategoryService();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoryservice_show', array('id' => $entity->getId())));
        }

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CategoryService entity.
     *
     * @param CategoryService $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CategoryService $entity)
    {
        $form = $this->createForm(new CategoryServiceType(), $entity, array(
            'action' => $this->generateUrl('admin_categoryservice_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CategoryService entity.
     *
     */
    public function newAction()
    {
        $entity = new CategoryService();
        $form   = $this->createCreateForm($entity);

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoryService entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CategoryService entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CategoryService entity.
    *
    * @param CategoryService $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CategoryService $entity)
    {
        $form = $this->createForm(new CategoryServiceType(), $entity, array(
            'action' => $this->generateUrl('admin_categoryservice_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CategoryService entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoryservice_edit', array('id' => $id)));
        }

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CategoryService entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategoryService entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_categoryservice'));
    }

    /**
     * Creates a form to delete a CategoryService entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_categoryservice_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
