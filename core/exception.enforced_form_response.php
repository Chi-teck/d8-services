<?php

/**
 * @file
 * Example of usage the exception.enforced_form_response service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.enforced_form_response service.
   *
   * @var \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber
   */
  protected $enforcedFormResponse;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber $enforced_form_response
   *   The enforced_form_response service.
   */
   public function __construct(EnforcedFormResponseSubscriber $enforced_form_response) {
     $this->enforcedFormResponse = $enforced_form_response;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.enforced_form_response')
    );
  }

}
