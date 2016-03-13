<?php

/**
 * @file
 * Example of usage the entity_route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_route_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber
   */
  protected $entityRouteSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber $entity_route_subscriber
   *   The entity_route_subscriber service.
   */
   public function __construct(EntityRouteProviderSubscriber $entity_route_subscriber) {
     $this->entityRouteSubscriber = $entity_route_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_route_subscriber')
    );
  }

}
