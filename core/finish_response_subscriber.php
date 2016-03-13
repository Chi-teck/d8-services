<?php

/**
 * @file
 * Example of usage the finish_response_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\FinishResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The finish_response_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\FinishResponseSubscriber
   */
  protected $finishResponseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\FinishResponseSubscriber $finish_response_subscriber
   *   The finish_response_subscriber service.
   */
   public function __construct(FinishResponseSubscriber $finish_response_subscriber) {
     $this->finishResponseSubscriber = $finish_response_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('finish_response_subscriber')
    );
  }

}
