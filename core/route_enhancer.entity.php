<?php

/**
 * @file
 * Example of usage the route_enhancer.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Enhancer\EntityRouteEnhancer;
// The service interfaces.
use Drupal\Core\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_enhancer.entity service.
   *
   * @var \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer $entity
   *   The entity service.
   */
   public function __construct(EntityRouteEnhancer $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_enhancer.entity')
    );
  }

}
