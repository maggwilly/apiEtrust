<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrigineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('origine')
        ->add('provenance')
        ->add('qualite')
        ->add('defined')
        ->add('typeVente')
        ->add('grossiste')
        ->add('moq')
        ->add('devise')
        ->add('details')
        ->add('garenti')
        ->add('dureeGarenti')
        ->add('surCommande')
        ->add('fournie');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Origine','csrf_protection' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_origine';
    }


}
