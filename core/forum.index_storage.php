<?php

/**
 * @file
 * Example of usage the forum.index_storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\forum\ForumIndexStorage;
// The service interfaces.
use Drupal\forum\ForumIndexStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The forum.index_storage service.
   *
   * @var \Drupal\forum\ForumIndexStorageInterface
   */
  protected $indexStorage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\forum\ForumIndexStorageInterface $index_storage
   *   The index_storage service.
   */
   public function __construct(ForumIndexStorageInterface $index_storage) {
     $this->indexStorage = $index_storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('forum.index_storage')
    );
  }

}
