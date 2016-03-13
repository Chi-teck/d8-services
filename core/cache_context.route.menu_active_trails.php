<?php

/**
 * @file
 * Example of usage the cache_context.route.menu_active_trails service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.route.menu_active_trails service.
   *
   * @var \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext
   */
  protected $menuActiveTrails;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext $menu_active_trails
   *   The menu_active_trails service.
   */
   public function __construct(MenuActiveTrailsCacheContext $menu_active_trails) {
     $this->menuActiveTrails = $menu_active_trails;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.route.menu_active_trails')
    );
  }

}
