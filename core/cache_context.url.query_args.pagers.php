<?php

/**
 * @file
 * Example of usage the cache_context.url.query_args.pagers service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\PagersCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.url.query_args.pagers service.
   *
   * @var \Drupal\Core\Cache\Context\PagersCacheContext
   */
  protected $pagers;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\PagersCacheContext $pagers
   *   The pagers service.
   */
   public function __construct(PagersCacheContext $pagers) {
     $this->pagers = $pagers;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.url.query_args.pagers')
    );
  }

}
