<?php

/**
 * @file
 * Example of usage the form_error_handler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\inline_form_errors\FormErrorHandler;
// The service interfaces.
use Drupal\Core\Form\FormErrorHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_error_handler service.
   *
   * @var \Drupal\inline_form_errors\FormErrorHandler
   */
  protected $formErrorHandler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\inline_form_errors\FormErrorHandler $form_error_handler
   *   The form_error_handler service.
   */
   public function __construct(FormErrorHandler $form_error_handler) {
     $this->formErrorHandler = $form_error_handler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_error_handler')
    );
  }

}
