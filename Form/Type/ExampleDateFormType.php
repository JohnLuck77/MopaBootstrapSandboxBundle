<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleDateFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startAt','date', array(
                'attr' => array('class' => 'startdate span1'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
            ))
            ->add('endAt','date', array(
                'attr' => array('class' => 'enddate span2'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
            ))
            ->add('special','checkbox', array(
                'label'     => 'Special?',
                'required'  => false,
            ))
            ;
    }

    public function getName()
    {
        return 'example_date';
    }

}
