<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.router.builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RouteBuilder;
// The service interfaces.
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\Core\DestructableInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.router.builder service.
   *
   * @var \Drupal\Core\Routing\RouteBuilderInterface
   */
  protected $builder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RouteBuilderInterface $builder
   *   The builder service.
   */
   public function __construct(RouteBuilderInterface $builder) {
     $this->builder = $builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.router.builder')
    );
  }

}
