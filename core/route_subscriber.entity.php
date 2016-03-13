<?php

/**
 * @file
 * Example of usage the route_subscriber.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_subscriber.entity service.
   *
   * @var \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber $entity
   *   The entity service.
   */
   public function __construct(EntityRouteAlterSubscriber $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_subscriber.entity')
    );
  }

}
