<?php

/**
 * @file
 * Example of usage the route_special_attributes_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_special_attributes_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber
   */
  protected $routeSpecialAttributesSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber $route_special_attributes_subscriber
   *   The route_special_attributes_subscriber service.
   */
   public function __construct(SpecialAttributesRouteSubscriber $route_special_attributes_subscriber) {
     $this->routeSpecialAttributesSubscriber = $route_special_attributes_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_special_attributes_subscriber')
    );
  }

}
