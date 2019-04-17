<?php

namespace App\Form;

use App\Entity\Employees;
use App\Entity\Jobs;
use App\Entity\Projects;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectsType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('title', TextType::class, [
        'label' => 'Intitulé',
      ])
      ->add('description', TextType::class, [
        'label' => 'Description',
      ])
      ->add('type', ChoiceType::class, [
        'label' => 'Type',
        'choices' => [
          'Capex' => 'Capex',
          'Opex' => 'Opex',
        ],
      ])
      ->add('isDelivered', ChoiceType::class, [
        'label' => 'Est livré',
        'choices' => [
          'Oui' => true,
          'Non' => false,
        ],
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Projects::class,
    ]);
  }
}