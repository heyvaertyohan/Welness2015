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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $currentProvider = $this->get('security.context')->getToken()->getUser();
        $findProvider = false;
        foreach($currentProvider->getRoles() as $role){
            if ($role == 'ROLE_PROVIDER'){
                $findProvider = true;
            }
        }
        if (!$findProvider){
            $entities = $em->getRepository('WellnessCoreBundle:CategoryService')->findAll();
        }
        else{
            $entities = $currentProvider->getCategoryService();
        }

        if($entities == null){
            throw $this->createNotFoundException("Pas de fournisseur trouvé!!");
        }

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new CategoryService();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoryservice_show', array('slug' => $entity->getSlug())));
        }

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function createCreateForm(CategoryService $entity)
    {
        $form = $this->createForm(new CategoryServiceType(), $entity, array(
            'action' => $this->generateUrl('admin_categoryservice_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    public function newAction()
    {
        $entity = new CategoryService();
        $form   = $this->createCreateForm($entity);

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function showAction(CategoryService $categoryService)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }

        $deleteForm = $this->createDeleteForm($categoryService->getId());

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(CategoryService $categoryService)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($categoryService->getId());



        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function createEditForm(CategoryService $entity)
    {
        $form = $this->createForm(new CategoryServiceType(), $entity, array(
            'action' => $this->generateUrl('admin_categoryservice_update', array('slug' => $entity->getSlug())),
            'method' => 'PUT',
        ));

        $translated = $this->get('translator')->trans('Mise à jour');
        $form->add('submit', 'submit', array('label' => $translated));

        return $form;
    }

    public function updateAction(Request $request, CategoryService $categoryService)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryService entity.');
        }

        $deleteForm = $this->createDeleteForm($categoryService->getId());
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoryservice'));
        }

        return $this->render('WellnessCoreBundle:BackEnd/CategoryService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, CategoryService $categoryService)
    {
        $form = $this->createDeleteForm($categoryService->getId());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategoryService entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_categoryservice'));
    }

    private function createDeleteForm($id)
    {
        $translated = $this->get('translator')->trans('Suppression');
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_categoryservice_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => $translated))
            ->getForm()
        ;
    }
}
