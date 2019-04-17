<?php

namespace App\Form;

use App\Entity\Employees;
use App\Entity\Jobs;
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

class EmployeesType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('firstName', TextType::class, [
        'label' => 'Prénom',
      ])
      ->add('lastName', TextType::class, [
        'label' => 'Nom',
      ])
      ->add('email', EmailType::class, [
        'label' => 'Email',
      ])
      ->add('job', EntityType::class, [
        'label' => 'Métier',
        'class' => Jobs::class,
        'choice_label' => 'name',
      ])
      ->add('dailyCost', IntegerType::class, [
        'label' => 'Coût journalier (en €)',
      ])
      ->add('hiringDate', DateType::class, [
        'label' => 'Date d\'embauche',
        'widget' => 'single_text',
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Employees::class,
    ]);
  }
}