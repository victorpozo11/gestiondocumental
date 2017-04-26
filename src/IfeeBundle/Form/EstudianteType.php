<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstudianteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombres')->add('apellidos')->add('cedula')->add('domicilio')->add('sector')->add('cambioDomicilio')->add('usaTelefono')->add('edad')->add('fechaNacimiento')->add('rutaFoto')->add('riesgoFamiliarResponsableDespuesEscuela')->add('numeroCarnetConadis')->add('carnetConadis')->add('porcentajeDiscapacidad')->add('fechaIngresoIfee')->add('transporteLlegada')->add('telefonoTransporte')->add('telefono')->add('idPais')->add('idRegion')->add('idProvincia')->add('idCiudad')->add('idParroquia');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\Estudiante'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_estudiante';
    }


}
