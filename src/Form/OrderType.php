<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('deliveryOption', ChoiceType::class, [
                'label' => 'Optie *',
                'choices' => [
                    'Ophalen' => 'ophalen',
                    'Bezorgen' => 'bezorgen',
                ],
            ])
            ->add('name', TextType::class, [
                'label' => 'Naam *',

            ])
            ->add('address', TextType::class, [
                'label' => 'Adres *',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email *',
            ])
            ->add('phoneNr', TelType::class, [
                'label' => 'Telefoonnummer',
                'required' => false,
            ])
            ->add('date', DateType::class, [
                'label' => 'Datum',
                'data' => new \DateTime('now'),
            ])
            ->add('time', TimeType::class, [
                'label' => 'Tijd',
                'data' => new \DateTime('now'),
            ])
            ->add('comment', TextareaType::class, [
                'required' => false,
                'label' => 'Instructies voor de bezorger',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Order',
        ]);
    }
}
