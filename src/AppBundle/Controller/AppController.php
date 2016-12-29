<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * CommandeClient controller.
 *
 */
class AppController extends Controller
{


    /**
     * Edits an existing Produit entity.
     */
    public function abaoutAction(Request $request)
    {
     $contents = $this->findFile($request->get('local').'_abaout');
     $response = new Response( $contents , 200);
     return  $response;
    }

      /**
     * Edits an existing Produit entity.
     */
    public function localsAction(Request $request)
    {
     $contents = $this->findFile($request->get('code').'_places','places');
     
     $response = new Response($contents , 200);
     return  $response;
    }  

        /**
     * Edits an existing Produit entity.
     */
    public function findFile($name,$directory='read')
    {
      $finder = new Finder();
       $finder = Finder::create()->files()->name($name.'.json')->in(__DIR__.'/../../../web/'.$directory);
       $contents='';
      foreach ($finder as $file) {
           $contents = $file->getContents();
           
       }
      return  $contents;
    }

    /**
     * Edits an existing Produit entity.
     */
    public function helpAction(Request $request)
    {
       $contents = $this->findFile($request->get('local').'_help');
     $response = new Response($contents, 200);
     return  $response;

}

    /**
     * Edits an existing Produit entity.
     */
    public function cguAction(Request $request)
    {
      $contents = $this->findFile($request->get('local').'_cgu');
      $response = new Response($contents, 200);
     return  $response;

}

}
