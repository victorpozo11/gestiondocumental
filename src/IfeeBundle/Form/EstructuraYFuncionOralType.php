<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstructuraYFuncionOralType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lenguaTamanio')->add('lenguaProtrucionRecta')->add('languaLateralizacionIzq')->add('lenguaLateralizacionDer')->add('lenguaElevacionDientesSuperiores')->add('lenguaMovAlternosSacarMeter')->add('lenguaMovAlternosProducirLa')->add('lenguaMovAlternosProducirKa')->add('lenguaMovAlternosVibrar')->add('lenguaAcanalarla')->add('lenguaTemblores')->add('lenguaObservaciones')->add('labiosSimetriaForma')->add('labiosProtucion')->add('labiosRetraccion')->add('labiosAbrirCerrarBoca')->add('labiosApretarBoca')->add('labiosProduccion')->add('labiosObservaciones')->add('paladarSimetriaForma')->add('paladarUvula')->add('paladarMovilidadVelo')->add('paladarObservaciones')->add('dientesImplantacion')->add('dientesEstados')->add('dientesOclusion')->add('dientesDentaturaPostiza')->add('dientesObservaciones')->add('movMaxilarDer')->add('movMaxilarIzq')->add('movMaxilarAdelante')->add('movMaxilarRotacion')->add('reportePacienteDeglutirVoluntario')->add('reportePacienteDeglutirInvoluntario')->add('reportePacienteMasticar')->add('reportePacienteCarraspear')->add('reportePacienteCialorrea')->add('reportePacienteReflejoPaladar')->add('reportePacienteDificultadMovOrales')->add('reportePacienteObservaciones');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\EstructuraYFuncionOral'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_estructurayfuncionoral';
    }


}
