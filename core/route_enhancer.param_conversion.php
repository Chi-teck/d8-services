<?php

/**
 * @file
 * Example of usage the route_enhancer.param_conversion service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\Enhancer\ParamConversionEnhancer;
// The service interfaces.
use Drupal\Core\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_enhancer.param_conversion service.
   *
   * @var \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer
   */
  protected $paramConversion;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer $param_conversion
   *   The param_conversion service.
   */
   public function __construct(ParamConversionEnhancer $param_conversion) {
     $this->paramConversion = $param_conversion;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_enhancer.param_conversion')
    );
  }

}
