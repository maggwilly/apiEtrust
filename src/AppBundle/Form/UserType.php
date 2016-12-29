<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('telephone')
            ->add('plainPassword')
            ->add('imageFile')
            ->add('langue')
            ->add('fiscalite', FiscaliteType::class)
            ->add('localisation',LocalisationType::class)
            ->add('contact',ContactType::class)
            ->add('origine', OrigineType::class)
            ->add('representation', RepresentationType::class)
            ->add('requestForVerification', RequestType::class)
            ->add('livraison',LivraisonType::class)
            ->add('payement',PayementType::class)
            ->add('retour',RetourType::class);
    }
    
  public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\User',
            'csrf_protection' => false
       ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_user';
    }
}
