<?php

/**
 * @file
 * Example of usage the cache_context.headers service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\HeadersCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.headers service.
   *
   * @var \Drupal\Core\Cache\Context\HeadersCacheContext
   */
  protected $headers;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\HeadersCacheContext $headers
   *   The headers service.
   */
   public function __construct(HeadersCacheContext $headers) {
     $this->headers = $headers;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.headers')
    );
  }

}
