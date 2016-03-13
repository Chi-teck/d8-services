<?php

/**
 * @file
 * Example of usage the access_check.node.add service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\Access\NodeAddAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.node.add service.
   *
   * @var \Drupal\node\Access\NodeAddAccessCheck
   */
  protected $add;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\Access\NodeAddAccessCheck $add
   *   The add service.
   */
   public function __construct(NodeAddAccessCheck $add) {
     $this->add = $add;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.node.add')
    );
  }

}
