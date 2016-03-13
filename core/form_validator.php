<?php

/**
 * @file
 * Example of usage the form_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Form\FormValidator;
// The service interfaces.
use Drupal\Core\Form\FormValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_validator service.
   *
   * @var \Drupal\Core\Form\FormValidatorInterface
   */
  protected $formValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Form\FormValidatorInterface $form_validator
   *   The form_validator service.
   */
   public function __construct(FormValidatorInterface $form_validator) {
     $this->formValidator = $form_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_validator')
    );
  }

}
