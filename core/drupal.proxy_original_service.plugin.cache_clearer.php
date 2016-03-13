<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.plugin.cache_clearer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Plugin\CachedDiscoveryClearer;
// The service interfaces.
use Drupal\Core\Plugin\CachedDiscoveryClearerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.plugin.cache_clearer service.
   *
   * @var \Drupal\Core\Plugin\CachedDiscoveryClearerInterface
   */
  protected $cacheClearer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Plugin\CachedDiscoveryClearerInterface $cache_clearer
   *   The cache_clearer service.
   */
   public function __construct(CachedDiscoveryClearerInterface $cache_clearer) {
     $this->cacheClearer = $cache_clearer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.plugin.cache_clearer')
    );
  }

}
