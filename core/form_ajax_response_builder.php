<?php

/**
 * @file
 * Example of usage the form_ajax_response_builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Form\FormAjaxResponseBuilder;
// The service interfaces.
use Drupal\Core\Form\FormAjaxResponseBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_ajax_response_builder service.
   *
   * @var \Drupal\Core\Form\FormAjaxResponseBuilderInterface
   */
  protected $formAjaxResponseBuilder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Form\FormAjaxResponseBuilderInterface $form_ajax_response_builder
   *   The form_ajax_response_builder service.
   */
   public function __construct(FormAjaxResponseBuilderInterface $form_ajax_response_builder) {
     $this->formAjaxResponseBuilder = $form_ajax_response_builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_ajax_response_builder')
    );
  }

}
