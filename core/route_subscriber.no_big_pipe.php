<?php

/**
 * @file
 * Example of usage the route_subscriber.no_big_pipe service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\big_pipe\EventSubscriber\NoBigPipeRouteAlterSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_subscriber.no_big_pipe service.
   *
   * @var \Drupal\big_pipe\EventSubscriber\NoBigPipeRouteAlterSubscriber
   */
  protected $noBigPipe;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\big_pipe\EventSubscriber\NoBigPipeRouteAlterSubscriber $no_big_pipe
   *   The no_big_pipe service.
   */
   public function __construct(NoBigPipeRouteAlterSubscriber $no_big_pipe) {
     $this->noBigPipe = $no_big_pipe;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_subscriber.no_big_pipe')
    );
  }

}
