<?php

/**
 * @file
 * Example of usage the route_enhancer.form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\Enhancer\FormRouteEnhancer;
// The service interfaces.
use Drupal\Core\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_enhancer.form service.
   *
   * @var \Drupal\Core\Routing\Enhancer\FormRouteEnhancer
   */
  protected $form;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\Enhancer\FormRouteEnhancer $form
   *   The form service.
   */
   public function __construct(FormRouteEnhancer $form) {
     $this->form = $form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_enhancer.form')
    );
  }

}
