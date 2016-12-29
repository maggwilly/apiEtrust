<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Publicite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; 
use AppBundle\Form\PubliciteType;
/**
 * Publicite controller.
 *
 */
class PubliciteController extends Controller
{
    /**
     * Lists all publicite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicites = $em->getRepository('AppBundle:Publicite')->findAll();

        return $this->render('publicite/index.html.twig', array(
            'publicites' => $publicites,
        ));
    }

    /**
     * Creates a new Produit entity.
     *@Rest\View(serializerGroups={"publicite"})
     */
    public function createAction(Request $request)
    {
        $entity = new Publicite();
         $em = $this->getDoctrine()->getManager();
         $form = $this->createCreateForm($entity);
         $form->handleRequest($request);
         $form->submit($request->request->all(), false); // Validation des données
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
           return ['success'=>true,'data'=>$entity];
        }
        return  $form;
    }

   /**
     * Creates a form to create a Produit entity.
     * @param Produit $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Publicite $entity)
    {
        $form = $this->createForm(PubliciteType::class, $entity);
        return $form;
    }
    /**
     * Creates a new Produit entity.
     *@Rest\View(serializerGroups={"full"})
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Publicite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        return  $entity;
    }
    /**
     *Edits an existing Produit entity.
     *@Rest\View(serializerGroups={"publicite"})
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Publicite')->find($request->get('id'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        $form = $this->createCreateForm($entity);
        $form->submit($request->request->all(), false); // Validation des données
        if ($form->isValid()) {
            $em->flush();
           return ['success'=>true,'data'=>$entity];
        }

        return  $form;
    }
   /**
     * Edits an existing Produit entity.
     *@Rest\View()
     */
    public function deleteAction(Request $request)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Publicite')->find($request->get('id'));
            if ($entity) {
            $em->remove($entity);
            $em->flush();
        }
       return ['success'=>true];
    }

private function getConnectedUser(){
    return $this->get('security.token_storage')->getToken()->getUser();
}

}
