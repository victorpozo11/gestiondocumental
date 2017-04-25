<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstructuraFamiliarType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombres')->add('apellidos')->add('parentesco')->add('edad')->add('instruccion')->add('ocupacion')->add('discapacidad')->add('descripcionDiscapacidad')->add('observacion')->add('convive');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\EstructuraFamiliar'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_estructurafamiliar';
    }


}
