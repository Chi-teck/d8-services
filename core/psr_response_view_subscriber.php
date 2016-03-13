<?php

/**
 * @file
 * Example of usage the psr_response_view_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\PsrResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The psr_response_view_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\PsrResponseSubscriber
   */
  protected $psrResponseViewSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\PsrResponseSubscriber $psr_response_view_subscriber
   *   The psr_response_view_subscriber service.
   */
   public function __construct(PsrResponseSubscriber $psr_response_view_subscriber) {
     $this->psrResponseViewSubscriber = $psr_response_view_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('psr_response_view_subscriber')
    );
  }

}
