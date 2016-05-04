<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\Image;
use WellnessCoreBundle\Form\ImageType;

class ImageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $currentProvider = $this->get('security.context')->getToken()->getUser();
        $findCurrentProvider = false;

        foreach($currentProvider->getRoles() as $role){
            if($role == 'ROLE_PROVIDER'){
                $findCurrentProvider = true;
            }
        }

        if (!$findCurrentProvider) {
            $entities = $em->getRepository('WellnessCoreBundle:Image')->findAll();
        }
        else{
            $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
            $entities = $rep_img->findBy(array('user' => $currentProvider->getId(), 'type' => Image::TYPE_IMG_PROVIDER));
        }

        return $this->render('WellnessCoreBundle:BackEnd/Image:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new Image();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_image_show', array('slug' => $entity->getSlug())));
        }

        return $this->render('WellnessCoreBundle:BackEnd/Image:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function createCreateForm(Image $entity)
    {
        $form = $this->createForm(new ImageType(), $entity, array(
            'action' => $this->generateUrl('admin_image_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    public function newAction()
    {
        $entity = new Image();
        $form   = $this->createCreateForm($entity);

        return $this->render('WellnessCoreBundle:BackEnd/Image:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function showAction(Image $image)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:Image')->find($image->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

        $deleteForm = $this->createDeleteForm($image->getId());

        return $this->render('WellnessCoreBundle:BackEnd/Image:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Image $image)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:Image')->find($image->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($image->getId());

        return $this->render('WellnessCoreBundle:BackEnd/Image:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function createEditForm(Image $entity)
    {
        $form = $this->createForm(new ImageType(), $entity, array(
            'action' => $this->generateUrl('admin_image_update', array('slug' => $entity->getSlug())),
            'method' => 'PUT',
        ));

        $translated = $this->get('translator')->trans('Mise à jour');
        $form->add('submit', 'submit', array('label' => $translated));

        return $form;
    }

    public function updateAction(Request $request, Image $image)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:Image')->find($image->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

        $deleteForm = $this->createDeleteForm($image->getId());
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_image'));
        }

        return $this->render('WellnessCoreBundle:BackEnd/Image:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Image entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WellnessCoreBundle:Image')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Image entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_image'));
    }

    /**
     * Creates a form to delete a Image entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        $translated = $this->get('translator')->trans('Suppression');
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_image_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => $translated))
            ->getForm()
        ;
    }
}
