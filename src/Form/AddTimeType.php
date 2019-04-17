<?php

namespace App\Form;

use App\Entity\Jobs;
use App\Entity\ProdTime;
use App\Entity\Projects;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddTimeType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('project', EntityType::class, [
        'label' => 'Projet concerné',
        'class' => Projects::class,
        'choice_label' => 'title',
      ])
      ->add('time', IntegerType::class, [
        'label' => 'Nombre de jours',
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => ProdTime::class,
    ]);
  }
}