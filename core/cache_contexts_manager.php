<?php

/**
 * @file
 * Example of usage the cache_contexts_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\CacheContextsManager;

/**
 * The example.
 */
class Example {

  /**
   * The cache_contexts_manager service.
   *
   * @var \Drupal\Core\Cache\Context\CacheContextsManager
   */
  protected $cacheContextsManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\CacheContextsManager $cache_contexts_manager
   *   The cache_contexts_manager service.
   */
   public function __construct(CacheContextsManager $cache_contexts_manager) {
     $this->cacheContextsManager = $cache_contexts_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_contexts_manager')
    );
  }

}
