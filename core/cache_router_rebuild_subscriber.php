<?php

/**
 * @file
 * Example of usage the cache_router_rebuild_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_router_rebuild_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber
   */
  protected $cacheRouterRebuildSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber $cache_router_rebuild_subscriber
   *   The cache_router_rebuild_subscriber service.
   */
   public function __construct(CacheRouterRebuildSubscriber $cache_router_rebuild_subscriber) {
     $this->cacheRouterRebuildSubscriber = $cache_router_rebuild_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_router_rebuild_subscriber')
    );
  }

}
