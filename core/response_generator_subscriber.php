<?php

/**
 * @file
 * Example of usage the response_generator_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The response_generator_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber
   */
  protected $responseGeneratorSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber $response_generator_subscriber
   *   The response_generator_subscriber service.
   */
   public function __construct(ResponseGeneratorSubscriber $response_generator_subscriber) {
     $this->responseGeneratorSubscriber = $response_generator_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('response_generator_subscriber')
    );
  }

}
