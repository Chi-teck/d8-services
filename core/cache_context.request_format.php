<?php

/**
 * @file
 * Example of usage the cache_context.request_format service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\RequestFormatCacheContext;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.request_format service.
   *
   * @var \Drupal\Core\Cache\Context\RequestFormatCacheContext
   */
  protected $requestFormat;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\RequestFormatCacheContext $request_format
   *   The request_format service.
   */
   public function __construct(RequestFormatCacheContext $request_format) {
     $this->requestFormat = $request_format;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.request_format')
    );
  }

}
