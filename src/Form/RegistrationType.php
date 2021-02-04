<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Class RegistrationType
 * @package App\Form
 */
class RegistrationType extends ApplicationType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, $this->fieldsConfiguration('Veuillez saisir un pseudo.'))
            ->add('email', EmailType::class, $this->fieldsConfiguration('Veuillez saisir une adresse email.'))
            ->add('password', PasswordType::class, $this->fieldsConfiguration('Veuillez saisir un mot de passe.'))
            ->add('passwordVerification', PasswordType::class, $this->fieldsConfiguration('Veuillez confirmer votre mot de passe.'))
            ->add('profile_picture', FileType::class, [
                'required' => false,
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
                                   'data_class'         => User::class,
                                   'translation_domain' => 'account-form'
                               ]);
    }
}