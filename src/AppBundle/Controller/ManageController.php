<?php

namespace AppBundle\Controller;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use AppBundle\Entity\InfoInterface;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/**
 * CommandeClient controller.
 *
 */
class ManageController extends Controller
{





    /**
     * Creates a form to create a Produit entity.
     *
     * @param Produit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InfoInterface $entity)
    {
        $form = $this->createForm($entity->getClassType(), $entity);

        return $form;
    }



    /**
     * Edits an existing Produit entity.
     *@Rest\View(serializerGroups={"full"})
     */
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

       $entity = $em->getRepository('AppBundle:'.$request->get('entity_name'))->find($request->get('id'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find  entity.');
        }

        return  $entity;
    }



    /**
     * Edits an existing Produit entity.
     *@Rest\View(serializerGroups={"full"})
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:'.$request->get('entity_name'))->find($request->get('id'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find entity.');
        }
        $form = $this->createCreateForm($entity);
        $form->submit($request->request->all(), false); // Validation des données

        if ($form->isValid()) {
            $em->flush();

           return ['success'=>true,'data'=>$entity];
        }

        return  $form;
    }


private function getConnectedUser(){
    return $this->get('security.token_storage')->getToken()->getUser();
}
}
