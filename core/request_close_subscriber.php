<?php

/**
 * @file
 * Example of usage the request_close_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RequestCloseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The request_close_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RequestCloseSubscriber
   */
  protected $requestCloseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RequestCloseSubscriber $request_close_subscriber
   *   The request_close_subscriber service.
   */
   public function __construct(RequestCloseSubscriber $request_close_subscriber) {
     $this->requestCloseSubscriber = $request_close_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_close_subscriber')
    );
  }

}
