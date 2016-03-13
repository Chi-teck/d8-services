<?php

/**
 * @file
 * Example of usage the cache_context.url.site service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\SiteCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.url.site service.
   *
   * @var \Drupal\Core\Cache\Context\SiteCacheContext
   */
  protected $site;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\SiteCacheContext $site
   *   The site service.
   */
   public function __construct(SiteCacheContext $site) {
     $this->site = $site;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.url.site')
    );
  }

}
