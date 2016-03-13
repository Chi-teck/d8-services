<?php

/**
 * @file
 * Example of usage the cache_context.url.query_args service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\QueryArgsCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.url.query_args service.
   *
   * @var \Drupal\Core\Cache\Context\QueryArgsCacheContext
   */
  protected $queryArgs;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\QueryArgsCacheContext $query_args
   *   The query_args service.
   */
   public function __construct(QueryArgsCacheContext $query_args) {
     $this->queryArgs = $query_args;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.url.query_args')
    );
  }

}
