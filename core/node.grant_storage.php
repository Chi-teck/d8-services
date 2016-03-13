<?php

/**
 * @file
 * Example of usage the node.grant_storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\NodeGrantDatabaseStorage;
// The service interfaces.
use Drupal\node\NodeGrantDatabaseStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The node.grant_storage service.
   *
   * @var \Drupal\node\NodeGrantDatabaseStorageInterface
   */
  protected $grantStorage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\NodeGrantDatabaseStorageInterface $grant_storage
   *   The grant_storage service.
   */
   public function __construct(NodeGrantDatabaseStorageInterface $grant_storage) {
     $this->grantStorage = $grant_storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('node.grant_storage')
    );
  }

}
