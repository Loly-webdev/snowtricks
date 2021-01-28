<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class VideoType
 * @package App\Form
 */
class VideoType extends ApplicationType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,  $this->fieldsConfiguration("Veuillez saisir un titre."))
            ->add('url', UrlType::class, $this->fieldsConfiguration("Veuillez saisir l'adresse url de la vidéo."))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
                                   'data_class' => Video::class,
                                   'translation_domain' => 'video-form'
                               ]);
    }
}
