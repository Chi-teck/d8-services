<?php

/**
 * @file
 * Example of usage the router.builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Routing\RouteBuilder;
// The service interfaces.
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\Core\DestructableInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.builder service.
   *
   * @var \Drupal\Core\ProxyClass\Routing\RouteBuilder
   */
  protected $builder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Routing\RouteBuilder $builder
   *   The builder service.
   */
   public function __construct(RouteBuilder $builder) {
     $this->builder = $builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.builder')
    );
  }

}
