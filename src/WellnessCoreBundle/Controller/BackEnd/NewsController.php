<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\News;
use WellnessCoreBundle\Form\NewsType;

class NewsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WellnessCoreBundle:News')->findAll();

        return $this->render('WellnessCoreBundle:BackEnd/News:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new News();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_news_show', array('id' => $entity->getId())));
        }

        return $this->render('WellnessCoreBundle:BackEnd/News:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function createCreateForm(News $entity)
    {
        $form = $this->createForm(new NewsType(), $entity, array(
            'action' => $this->generateUrl('admin_news_new'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    public function newAction()
    {
        $entity = new News();
        $form   = $this->createCreateForm($entity);

        return $this->render('WellnessCoreBundle:BackEnd/News:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function showAction(News $news)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:News')->find($news->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $deleteForm = $this->createDeleteForm($news->getId());

        return $this->render('WellnessCoreBundle:BackEnd/News:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(News $news)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:News')->find($news->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($news->getId());

        return $this->render('WellnessCoreBundle:BackEnd/News:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function createEditForm(News $entity)
    {
        $form = $this->createForm(new NewsType(), $entity, array(
            'action' => $this->generateUrl('admin_news_update', array('slug' => $entity->getSlug())),
            'method' => 'PUT',
        ));

        $translated = $this->get('translator')->trans('Mise à jour');
        $form->add('submit', 'submit', array('label' => $translated));

        return $form;
    }

    public function updateAction(Request $request, News $news)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:News')->find($news->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $deleteForm = $this->createDeleteForm($news->getId());
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_news'));
        }

        return $this->render('WellnessCoreBundle:BackEnd/News:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WellnessCoreBundle:News')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find News entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_news'));
    }

    private function createDeleteForm($id)
    {
        $translated = $this->get('translator')->trans('Suppression');
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_news_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => $translated))
            ->getForm()
        ;
    }
}
