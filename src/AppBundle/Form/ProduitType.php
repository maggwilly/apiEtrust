<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
        ->add('categorie')
        ->add('description')
        ->add('prix')
        ->add('lieu')
        ->add('utilDate','date', array(
                 'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'invalid_message' => 'Validation date',
                'error_bubbling' => true,
                'input' => 'datetime' # return a Datetime object (*)
            ))
           ->add('utilTime','datetime', array(
              'widget' => 'single_text',
                'format' => 'HH:mm',
                'invalid_message' => 'Validation date',
                'error_bubbling' => true,
                'input' => 'datetime' # return a Datetime object (*)
            ))
        ->add('imageFile')
        ->add('typeAnnonce')
        ->add('descriptionLieu')
        ->add('utilDate')
        ->add('utilTime')
        ->add('lat')
        ->add('lon')
        ->add('prixDiscutable')
        ->add('origine', OrigineType::class)
        ->add('livraison',LivraisonType::class)
        ->add('payement',PayementType::class)
        ->add('retour',RetourType::class)
     ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit',
            'csrf_protection' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }


}
