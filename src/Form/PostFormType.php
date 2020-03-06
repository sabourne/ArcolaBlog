<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Post;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PostFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
    
    $builder
        ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('body', TextareaType::class, array('attr' => array('class' => 'form-control')))
        ->add('imageFile', FileType::class, ['mapped' => false])
        ->add('date', null, ['data' => new \DateTime()])
        ->add('tags', EntityType::class, ['class' => Tag::class, 'multiple' => true, 'expanded' => true, 'label' => 'Choose existing tag: '])
        ->add('newtag', null, ['required' => false, 'mapped' => false, 'label' => 'Add new tag: '])
        ->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-green mt-3')))
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}

