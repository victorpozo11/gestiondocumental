<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ViviendaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tenencia')->add('tipoVivienda')->add('numeroPisos')->add('materialConstruccion')->add('descripcionVivienda')->add('numeroTotalCuartos')->add('domitorios')->add('sala')->add('comedor')->add('cocina')->add('banio')->add('tipoBanio')->add('numeroCamas')->add('hacinamiento')->add('descripcionCapacidadVivienda')->add('vehiculoPropio')->add('descripcionVehiculo')->add('tipoServicioAgua')->add('descripcionOtroServicioAgua')->add('tipoPiso')->add('descripcionOtroPiso')->add('tipoTecho')->add('descripcionOtroTecho')->add('tipoLuzElectrica')->add('alcantarillado')->add('usaTelefono')->add('tvcable')->add('internet')->add('observaciones');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\Vivienda'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_vivienda';
    }


}
