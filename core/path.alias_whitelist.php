<?php

/**
 * @file
 * Example of usage the path.alias_whitelist service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\AliasWhitelist;
// The service interfaces.
use Drupal\Core\DestructableInterface;
use Drupal\Core\Cache\CacheCollectorInterface;
use Drupal\Core\Path\AliasWhitelistInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path.alias_whitelist service.
   *
   * @var \Drupal\Core\Path\AliasWhitelistInterface
   */
  protected $aliasWhitelist;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\AliasWhitelistInterface $alias_whitelist
   *   The alias_whitelist service.
   */
   public function __construct(AliasWhitelistInterface $alias_whitelist) {
     $this->aliasWhitelist = $alias_whitelist;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.alias_whitelist')
    );
  }

}
