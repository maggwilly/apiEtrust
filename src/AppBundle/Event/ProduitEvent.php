<?php
// src/Sdz/BlogBundle/Bigbrother/MessagePostEvent.php
namespace AppBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use AppBundle\Entity\Produit;
class ProduitEvent extends Event
{

protected $produit;
public function __construct(Produit $produit)
{
$this->produit = $produit;

} 

public function getProduit()
{
return $this->produit;
} 

}