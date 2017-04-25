<?php

namespace IfeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistorialDesarrolloSocioafectivoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prenatalEdadMaternaEmbarazo')->add('prenatalNumeroEmbarazos')->add('prenatalAbortos')->add('prenatalNumeroHijos')->add('prenatalControlesEmbarazo')->add('prenatalNumeroLugarHijo')->add('prenatalInfeccionVaginal')->add('prenatalCaidas')->add('prenatalAmenazaAborto')->add('prenatalRayosx')->add('prenatalMedicamentos')->add('prenatalAlcohol')->add('prenatalTabaco')->add('prenatalDrogas')->add('prenatalOtrosEstimulante')->add('prenatalEstadoEmocionalEmbarazo')->add('prenatalAlimentacionEmbarazo')->add('prenatalEmbarazoPlanificado')->add('prenatalEdadGestacional')->add('prenatalTipoParto')->add('prenatalCordonUmbilicalCuello')->add('postnatalColor')->add('postnatalLlanto')->add('postnatalCuidadosEspeciales')->add('postnatalTiempo')->add('postnatalHospitalizaciones')->add('postnatalCirugias')->add('postnatalAnomalias')->add('postnatalDescripcionAnomalias')->add('postnatalAccidentes')->add('postnatalPeso')->add('postnatalTalla')->add('actividadesVidaDiariaAlimentacionActual')->add('actividadesVidaDiariaSuenio')->add('esfinteresObservacion')->add('vestidoObservacion')->add('relacionPadre')->add('relacionMadre')->add('relacionHermanos')->add('relacionLudica')->add('metodosDisciplinaDescripcion')->add('educacionExpectativaIngreso')->add('adicionalesMetodoAnticonceptivo')->add('adicionalesBono')->add('adicionalesBonoDescripcion')->add('adicionalesEdadMental')->add('adicionalesEdadFisica')->add('adicionalesPeriodo')->add('relacionAmigos')->add('metodosDisciplinaPega')->add('metodosDisciplinaRegania')->add('metodosDisciplinaRazona')->add('metodosDisciplinaAmenaza')->add('metodosDisciplinaIgnora')->add('metodosDisciplinaRetiraObjeto')->add('metodosDisciplinaNinguna')->add('metodosDisciplinaOtra')->add('metodosDisciplinaDescripcionOtra')->add('buenComportamientoElogios')->add('buenComportamientoRegalos')->add('buenComportamientoCaricias')->add('buenComportamientoNingunPremio')->add('buenComportamientoComida')->add('buenComportamientoObjetos')->add('buenComportamientoHaceLoQueLeGusta')->add('riesgoFamiliarPlanificacionFamiliar')->add('riesgoFamiliarCualPlanificacionFamiliar')->add('riesgoFamiliarComunicacionPareja')->add('riesgoFamiliarResponsableDespuesEscuela')->add('maltratoFisico')->add('maltratoPsicologico')->add('maltratoSexual')->add('maltratoMachismo')->add('maltratoViolenciaIntrafamiliar')->add('situacionLegal');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IfeeBundle\Entity\HistorialDesarrolloSocioafectivo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ifeebundle_historialdesarrollosocioafectivo';
    }


}
