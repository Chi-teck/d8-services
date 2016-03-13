<?php

/**
 * @file
 * Example of usage the cache_context.cookies service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\CookiesCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.cookies service.
   *
   * @var \Drupal\Core\Cache\Context\CookiesCacheContext
   */
  protected $cookies;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\CookiesCacheContext $cookies
   *   The cookies service.
   */
   public function __construct(CookiesCacheContext $cookies) {
     $this->cookies = $cookies;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.cookies')
    );
  }

}
