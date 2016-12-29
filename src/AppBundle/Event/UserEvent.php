<?php
// src/Sdz/BlogBundle/Bigbrother/MessagePostEvent.php
namespace AppBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use AppBundle\Entity\User;
class UserEvent extends Event
{

protected $user;
protected $objet;
public function __construct(User $user,$objet=null)
{
$this->user = $user;
$this->objet = $objet;
} 

public function getUser()
{
return $this->user;
} 

public function getObjet()
{
return $this->objet;
}
}