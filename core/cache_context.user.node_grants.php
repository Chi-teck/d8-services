<?php

/**
 * @file
 * Example of usage the cache_context.user.node_grants service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\Cache\NodeAccessGrantsCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.user.node_grants service.
   *
   * @var \Drupal\node\Cache\NodeAccessGrantsCacheContext
   */
  protected $nodeGrants;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\Cache\NodeAccessGrantsCacheContext $node_grants
   *   The node_grants service.
   */
   public function __construct(NodeAccessGrantsCacheContext $node_grants) {
     $this->nodeGrants = $node_grants;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.user.node_grants')
    );
  }

}
