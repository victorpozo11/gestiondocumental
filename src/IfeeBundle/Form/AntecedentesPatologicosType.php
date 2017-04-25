<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AntecedentesPatologicosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('oidoSupuracion')->add('oidoOperaciones')->add('oidoMareo')->add('narizObstruccion')->add('narizTraumatismo')->add('bocaAnomaliaPaladar')->add('bocaOperaciones')->add('bocaDentadura')->add('laringeInfecciones')->add('laringeOperaciones')->add('faringeInflamaciones')->add('faringeTumores')->add('feringeOperaciones')->add('alimentacion')->add('deglucion')->add('otro')->add('tractoRespiratiorioInferior')->add('convulsiones')->add('examenesYTratamientosAnteriores');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\AntecedentesPatologicos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_antecedentespatologicos';
    }


}
