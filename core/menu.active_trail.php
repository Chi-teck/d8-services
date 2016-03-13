<?php

/**
 * @file
 * Example of usage the menu.active_trail service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\MenuActiveTrail;
// The service interfaces.
use Drupal\Core\DestructableInterface;
use Drupal\Core\Cache\CacheCollectorInterface;
use Drupal\Core\Menu\MenuActiveTrailInterface;

/**
 * The example.
 */
class Example {

  /**
   * The menu.active_trail service.
   *
   * @var \Drupal\Core\Menu\MenuActiveTrailInterface
   */
  protected $activeTrail;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\MenuActiveTrailInterface $active_trail
   *   The active_trail service.
   */
   public function __construct(MenuActiveTrailInterface $active_trail) {
     $this->activeTrail = $active_trail;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu.active_trail')
    );
  }

}
