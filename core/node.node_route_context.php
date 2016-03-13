<?php

/**
 * @file
 * Example of usage the node.node_route_context service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\ContextProvider\NodeRouteContext;
// The service interfaces.
use Drupal\Core\Plugin\Context\ContextProviderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The node.node_route_context service.
   *
   * @var \Drupal\node\ContextProvider\NodeRouteContext
   */
  protected $nodeRouteContext;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\ContextProvider\NodeRouteContext $node_route_context
   *   The node_route_context service.
   */
   public function __construct(NodeRouteContext $node_route_context) {
     $this->nodeRouteContext = $node_route_context;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('node.node_route_context')
    );
  }

}
