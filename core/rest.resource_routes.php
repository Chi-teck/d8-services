<?php

/**
 * @file
 * Example of usage the rest.resource_routes service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\Routing\ResourceRoutes;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The rest.resource_routes service.
   *
   * @var \Drupal\rest\Routing\ResourceRoutes
   */
  protected $resourceRoutes;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\Routing\ResourceRoutes $resource_routes
   *   The resource_routes service.
   */
   public function __construct(ResourceRoutes $resource_routes) {
     $this->resourceRoutes = $resource_routes;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('rest.resource_routes')
    );
  }

}
