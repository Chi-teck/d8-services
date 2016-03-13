<?php

/**
 * @file
 * Example of usage the cache_context.url service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\UrlCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.url service.
   *
   * @var \Drupal\Core\Cache\Context\UrlCacheContext
   */
  protected $url;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\UrlCacheContext $url
   *   The url service.
   */
   public function __construct(UrlCacheContext $url) {
     $this->url = $url;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.url')
    );
  }

}
