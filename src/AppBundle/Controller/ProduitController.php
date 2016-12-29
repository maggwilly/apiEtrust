<?php

namespace AppBundle\Controller;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use AppBundle\Entity\Produit;
use AppBundle\Event\ProduitEvent;
use AppBundle\Event\EtrustEvents;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\ProduitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/**
 * CommandeClient controller.
 *
 */
class ProduitController extends Controller
{

    /**
     * Lists all Produit entities.
     * @Rest\View(serializerGroups={"produit"})
     * @QueryParam(name="offset", requirements="\d+", default="", description="Index de début de la pagination")
     * @QueryParam(name="limit", requirements="\d+", default="", description="Index de fin de la pagination")
     *  @QueryParam(name="nom", default="", description="nom e recherche")
     *@Security("has_role('ROLE_USER')")
     */
    public function indexAction(Request $request, ParamFetcher $paramFetcher)
    {
          $em = $this->getDoctrine()->getManager();
          $offset = $paramFetcher->get('offset');
          $limit = $paramFetcher->get('limit');
          $nom = $paramFetcher->get('nom');
          $entity = $this->getConnectedUser();
       if (!$entity) {
           throw $this->createNotFoundException('Unable to find user entity.');
          }
        $qb= $em->getRepository('AppBundle:Produit')->findByUser($entity); 
     if ($offset != "") {
            $qb->setFirstResult($offset);
        }

        if ($limit != "") {
            $qb->setMaxResults($limit);
        }
          if ($nom != "") {
            $qb->andWhere('p.nom LIKE :nom')
               ->setParameter('nom', '%'.$nom.'%');
        }
       return $qb->getQuery()->getResult();
    }
       /**
     * Lists all Produit entities.
     * @Rest\View(serializerGroups={"event"})
     */
      public function utilsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $this->getConnectedUser();
        $events= $em->getRepository('AppBundle:Event')->findByLocality($entity->getLocalisation()->getPays(), $entity->getLocalisation()->getVille()); 
       return $events;
    }
    /**
     * Creates a new Produit entity.
     *@Rest\View(serializerGroups={"produit"})
     */
    public function createAction(Request $request)
    {
        $entity = new Produit();
        $user = $this->getConnectedUser();
        $entity->setUser($user);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $form->submit($request->request->all(),false); // Validation des d
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $event= new ProduitEvent($entity);
            $this->get('event_dispatcher')->dispatch(EtrustEvents::onObjetCreated, $event);
           return ['success'=>true,'data'=>$entity];
        }
        return  $form;
    }

    /**
     * Creates a form to create a Produit entity.
     * @param Produit $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Produit $entity)
    {
        $form = $this->createForm(ProduitType::class, $entity);
        return $form;
    }

    /**
     * Creates a new Produit entity.
     *@Rest\View(serializerGroups={"full"})
     */
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Produit')->find($request->get('id'));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        return  $entity;
    }

    /**
     * Creates a new Produit entity.
     *@Rest\View(serializerGroups={"produit"})
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Produit')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        return  $entity;
    }


    /**
     * Edits an existing Produit entity.
     *@Rest\View(serializerGroups={"produit"})
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Produit')->find($request->get('id'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        $form = $this->createCreateForm($entity);
        $form->submit($request->request->all(), false); // Validation des données

        if ($form->isValid()) {
            $em->flush();
            $event= new ProduitEvent($entity);
            $this->get('event_dispatcher')->dispatch(EtrustEvents::onObjetCreated, $event);
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
            $entity = $em->getRepository('AppBundle:Produit')->find($request->get('id'));
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
