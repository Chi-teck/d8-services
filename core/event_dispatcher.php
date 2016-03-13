<?php

/**
 * @file
 * Example of usage the event_dispatcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * The example.
 */
class Example {

  /**
   * The event_dispatcher service.
   *
   * @var \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher
   */
  protected $eventDispatcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher $event_dispatcher
   *   The event_dispatcher service.
   */
   public function __construct(ContainerAwareEventDispatcher $event_dispatcher) {
     $this->eventDispatcher = $event_dispatcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('event_dispatcher')
    );
  }

}
