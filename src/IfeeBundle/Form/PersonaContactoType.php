<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaContactoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombres')->add('apellidos')->add('cedula')->add('ocupacion')->add('discapacidad')->add('usaTelefono')->add('telefono2')->add('telefono3')->add('edad')->add('fechaNacimiento')->add('fechaDefuncion')->add('estadoCivil')->add('instruccion')->add('profesion')->add('lugarTrabajo')->add('descripcionDiscapacidad');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\PersonaContacto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_personacontacto';
    }


}
