<?php

namespace InputBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('attr' => array('placeholder' => 'Username'),
                'constraints' => array(
                    new NotBlank(array("message" => "This value is not valid.")),
                )
            ))
            ->add('date', DateType::class, array('attr' => array('placeholder' => 'Date')
            ))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'Subject'),
                'constraints' => array(
                    new NotBlank(array("message" => "This value is not valid.")),
                )
            ))
            ->add('content', TextareaType::class, array('attr' => array('placeholder' => 'Content'),
                'constraints' => array(
                    new NotBlank(array("message" => "This value is not valid.")),
                )
            ));
    }
}