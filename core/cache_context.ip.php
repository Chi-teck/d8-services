<?php

/**
 * @file
 * Example of usage the cache_context.ip service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\IpCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.ip service.
   *
   * @var \Drupal\Core\Cache\Context\IpCacheContext
   */
  protected $ip;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\IpCacheContext $ip
   *   The ip service.
   */
   public function __construct(IpCacheContext $ip) {
     $this->ip = $ip;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.ip')
    );
  }

}
