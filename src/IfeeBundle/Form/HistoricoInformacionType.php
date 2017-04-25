<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistoricoInformacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fecha')->add('descripcion')->add('idHabilidad')->add('idHistorial')->add('idAprendizaje')->add('idMotricidad')->add('idConducta')->add('idConsulta')->add('idSeguimiento')->add('idConvive')->add('idEstructuraYFuncionOral')->add('idAntecedentesPatologicos')->add('idSalud')->add('idVivienda')->add('idPsicologia2')->add('idEgresos')->add('idIngresos')->add('idLogopedica')->add('idDesarrolloMotor')->add('idEstudiante');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\HistoricoInformacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_historicoinformacion';
    }


}
