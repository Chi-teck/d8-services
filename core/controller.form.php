<?php

/**
 * @file
 * Example of usage the controller.form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Controller\HtmlFormController;

/**
 * The example.
 */
class Example {

  /**
   * The controller.form service.
   *
   * @var \Drupal\Core\Controller\HtmlFormController
   */
  protected $form;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Controller\HtmlFormController $form
   *   The form service.
   */
   public function __construct(HtmlFormController $form) {
     $this->form = $form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('controller.form')
    );
  }

}
