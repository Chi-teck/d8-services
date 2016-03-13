<?php

/**
 * @file
 * Example of usage the cache_context.timezone service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\TimeZoneCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.timezone service.
   *
   * @var \Drupal\Core\Cache\Context\TimeZoneCacheContext
   */
  protected $timezone;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\TimeZoneCacheContext $timezone
   *   The timezone service.
   */
   public function __construct(TimeZoneCacheContext $timezone) {
     $this->timezone = $timezone;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.timezone')
    );
  }

}
