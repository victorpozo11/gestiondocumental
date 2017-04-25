<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformacionSaludType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('enfermedadesGraves')->add('postnatalAccidentes')->add('completoVacunas')->add('tomaMedicamentos')->add('vacunaFaltante')->add('desconoceTomaMedicamento')->add('nombreMedicamento')->add('hospitalAtendido')->add('medicoTratante');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\InformacionSalud'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_informacionsalud';
    }


}
