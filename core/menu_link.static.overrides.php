<?php

/**
 * @file
 * Example of usage the menu_link.static.overrides service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\StaticMenuLinkOverrides;
// The service interfaces.
use Drupal\Core\Menu\StaticMenuLinkOverridesInterface;

/**
 * The example.
 */
class Example {

  /**
   * The menu_link.static.overrides service.
   *
   * @var \Drupal\Core\Menu\StaticMenuLinkOverridesInterface
   */
  protected $overrides;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\StaticMenuLinkOverridesInterface $overrides
   *   The overrides service.
   */
   public function __construct(StaticMenuLinkOverridesInterface $overrides) {
     $this->overrides = $overrides;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu_link.static.overrides')
    );
  }

}
