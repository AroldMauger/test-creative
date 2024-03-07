<?php

namespace App\Form;

use App\Entity\Progress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewProgressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'input-in-form',
                    'id' => 'form-date'
                ]
            ])
            ->add('techno', ChoiceType::class, [
                'choices' => ["Javascript"=>"Javascript", "CSS"=>"CSS", "PHP"=>"PHP", "Symfony"=>"Symfony", "Laravel"=>"Laravel", "Android"=>"Android", "React"=>"React", "SQL"=>"SQL"],
                'attr' => [
                    'class' => 'input-in-form',
                    'id' => 'form-techno'
                ]
            ])
            ->add('description', TextType::class, [
                'attr' => [
                    'class' => 'input-in-form',
                    'id' => 'form-description'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Progress::class,
        ]);
    }
}
