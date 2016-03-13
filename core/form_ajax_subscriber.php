<?php

/**
 * @file
 * Example of usage the form_ajax_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The form_ajax_subscriber service.
   *
   * @var \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber
   */
  protected $formAjaxSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber $form_ajax_subscriber
   *   The form_ajax_subscriber service.
   */
   public function __construct(FormAjaxSubscriber $form_ajax_subscriber) {
     $this->formAjaxSubscriber = $form_ajax_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_ajax_subscriber')
    );
  }

}
