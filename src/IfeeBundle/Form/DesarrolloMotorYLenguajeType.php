<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DesarrolloMotorYLenguajeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('motorSostenCefalico')->add('motorGiros')->add('motorPosicionSentada')->add('motorGateo')->add('motorBepedestacion')->add('motorMarcha')->add('lenguajeSonrisaSocial')->add('lenguajeBalbuceo')->add('lenguajeFrases')->add('lenguajeComunicaActualmente')->add('lenguajeGorgeo')->add('lenguajePrimeraPalabra')->add('lenguajeOraciones');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\DesarrolloMotorYLenguaje'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_desarrollomotorylenguaje';
    }


}
