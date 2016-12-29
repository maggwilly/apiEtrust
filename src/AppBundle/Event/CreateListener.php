<?php
// src/Sdz/BlogBundle/Bigbrother/CensureListener.php
namespace AppBundle\Event;
use JMS\Serializer\Serializer;
use Symfony\Component\EventDispatcher\Event;
use JMS\Serializer\SerializationContext;
class CreateListener
{
// Liste des id des utilisateurs à surveiller

protected $serializer;
public function __construct(Serializer $serializer)
{

$this->serializer = $serializer;
}

public function onObjetCreated(Event $event)
{

if ($event instanceof ProduitEvent) {  
   $entity= $event->getProduit();
   $view= $this->serializer->serialize($entity, 'json', SerializationContext::create()->setGroups(array('full')));
   $fp = fopen(__DIR__.'/../../../web/view/produits/'.$entity->getUniqueid().'.json', 'w');
   fwrite($fp,  $this->indent($view));
   fclose($fp);
 }

 else if ($event instanceof UserEvent) {  
   $entity= $event->getUser();
   $view= $this->serializer->serialize($entity, 'json', SerializationContext::create()->setGroups(array('full')));
   $fp = fopen(__DIR__.'/../../../web/view/profils/'.$entity->getUniqueid().'.json', 'w');
   fwrite($fp,  $this->indent($view) );
   fclose($fp);
 }
}

/**
 * Indents a flat JSON string to make it more human-readable.
 *
 * @param string $json The original JSON string to process.
 *
 * @return string Indented version of the original JSON string.
 */
function indent($json) {

    $result      = '';
    $pos         = 0;
    $strLen      = strlen($json);
    $indentStr   = '  ';
    $newLine     = "\n";
    $prevChar    = '';
    $outOfQuotes = true;

    for ($i=0; $i<=$strLen; $i++) {

        // Grab the next character in the string.
        $char = substr($json, $i, 1);

        // Are we inside a quoted string?
        if ($char == '"' && $prevChar != '\\') {
            $outOfQuotes = !$outOfQuotes;

        // If this character is the end of an element,
        // output a new line and indent the next line.
        } else if(($char == '}' || $char == ']') && $outOfQuotes) {
            $result .= $newLine;
            $pos --;
            for ($j=0; $j<$pos; $j++) {
                $result .= $indentStr;
            }
        }

        // Add the character to the result string.
        $result .= $char;

        // If the last character was the beginning of an element,
        // output a new line and indent the next line.
        if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
            $result .= $newLine;
            if ($char == '{' || $char == '[') {
                $pos ++;
            }

            for ($j = 0; $j < $pos; $j++) {
                $result .= $indentStr;
            }
        }

        $prevChar = $char;
    }

    return $result;
}

}