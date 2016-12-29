<?php
// src/Sdz/BlogBundle/Entity/Image.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="_image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;
  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

  private $file;

  private $tempFilename;

      public function __construct($file=null,$alt="image")
    {
        $this->setFile($file);
        $this->setUrl($this->getUploadDir().'/'.md5(uniqid()).'.jpg');  
        $this->setAlt($alt);  
    }


  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
          return;
    }
    // Si on avait un ancien fichier, on le supprime
    if (null !== $this->tempFilename) {
      $oldFile = $this->getRootDir().$this->tempFilename;
      if (file_exists($oldFile)) {
           unlink($oldFile);
      }
    }
    // On déplace le fichier envoyé dans le répertoire de notre choix

    $filepath = $this->url;
    $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->file));
     file_put_contents($filepath,$data);
     
  }
  /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    // On sauvegarde temporairement le nom du fichier car il dépend de l'id
    $this->tempFilename = $this->url;
  }
  /**
   * @ORM\PostRemove()
   */
  public function removeUpload()
  {
    // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
    if (file_exists($this->tempFilename)) {
      // On supprime le fichier
      unlink($this->tempFilename);
    }
  }
  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    return 'uploads/img';
  }
  protected function getUploadRootDir()
  {
    // On retourne le chemin absolu vers l'image pour notre code PHP
    return $this->getRootDir().$this->getUploadDir();
  }

    protected function getRootDir()
  {
    // On retourne le chemin absolu vers l'image pour notre code PHP
    return __DIR__.'/../../../web/';
  }

  public function getWebPath()
  {
    return $this->getUrl();
  }
  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string $url
   * @return Image
   */
  public function setUrl($url)
  {
    $this->url = $url;
    return $this;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
  /**
   * @param string $alt
   * @return Image
   */
  public function setAlt($alt)
  {
    $this->alt = $alt;
    return $this;
  }
  /**
   * @return string
   */
  public function getAlt()
  {
    return $this->alt;
  }
  public function setFile($file)
  {
    
    $this->file = $file;
    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      $this->tempFilename = $this->url;
      // On réinitialise les valeurs des attributs url et alt
      $this->url = null;
      $this->alt = null;
    }
  }

  public function getFile()
  {
    return $this->file;
  }
}