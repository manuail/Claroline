<?php

namespace Claroline\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ResourcePropertiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('shareType', 'choice', array(
            'choices' => array(true => 'public', false => 'private'),
            'multiple' => false,
            'expanded' => true,
            'label' => 'sharable'
        ));
    }

    public function getName()
    {
        return 'resource_options_form';
    }

}
