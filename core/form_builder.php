<?php

/**
 * @file
 * Example of usage the form_builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Form\FormBuilder;
// The service interfaces.
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormValidatorInterface;
use Drupal\Core\Form\FormSubmitterInterface;
use Drupal\Core\Form\FormCacheInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_builder service.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formBuilder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form_builder service.
   */
   public function __construct(FormBuilderInterface $form_builder) {
     $this->formBuilder = $form_builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_builder')
    );
  }

}
