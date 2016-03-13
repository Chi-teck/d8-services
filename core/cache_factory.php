<?php

/**
 * @file
 * Example of usage the cache_factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\CacheFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_factory service.
   *
   * @var \Drupal\Core\Cache\CacheFactoryInterface
   */
  protected $cacheFactory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\CacheFactoryInterface $cache_factory
   *   The cache_factory service.
   */
   public function __construct(CacheFactoryInterface $cache_factory) {
     $this->cacheFactory = $cache_factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_factory')
    );
  }

}
