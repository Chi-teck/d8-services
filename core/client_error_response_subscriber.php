<?php

/**
 * @file
 * Example of usage the client_error_response_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The client_error_response_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber
   */
  protected $clientErrorResponseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber $client_error_response_subscriber
   *   The client_error_response_subscriber service.
   */
   public function __construct(ClientErrorResponseSubscriber $client_error_response_subscriber) {
     $this->clientErrorResponseSubscriber = $client_error_response_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('client_error_response_subscriber')
    );
  }

}
