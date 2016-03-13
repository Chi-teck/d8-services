<?php

/**
 * @file
 * Example of usage the plugin.cache_clearer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer;
// The service interfaces.
use Drupal\Core\Plugin\CachedDiscoveryClearerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.cache_clearer service.
   *
   * @var \Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer
   */
  protected $cacheClearer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer $cache_clearer
   *   The cache_clearer service.
   */
   public function __construct(CachedDiscoveryClearer $cache_clearer) {
     $this->cacheClearer = $cache_clearer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.cache_clearer')
    );
  }

}
