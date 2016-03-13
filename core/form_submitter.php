<?php

/**
 * @file
 * Example of usage the form_submitter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Form\FormSubmitter;
// The service interfaces.
use Drupal\Core\Form\FormSubmitterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_submitter service.
   *
   * @var \Drupal\Core\Form\FormSubmitterInterface
   */
  protected $formSubmitter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Form\FormSubmitterInterface $form_submitter
   *   The form_submitter service.
   */
   public function __construct(FormSubmitterInterface $form_submitter) {
     $this->formSubmitter = $form_submitter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_submitter')
    );
  }

}
