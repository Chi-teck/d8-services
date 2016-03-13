<?php

/**
 * @file
 * Example of usage the access_check.node.revision service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\Access\NodeRevisionAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.node.revision service.
   *
   * @var \Drupal\node\Access\NodeRevisionAccessCheck
   */
  protected $revision;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\Access\NodeRevisionAccessCheck $revision
   *   The revision service.
   */
   public function __construct(NodeRevisionAccessCheck $revision) {
     $this->revision = $revision;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.node.revision')
    );
  }

}
