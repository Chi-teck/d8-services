<?php

/**
 * @file
 * Example of usage the path.alias_storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\AliasStorage;
// The service interfaces.
use Drupal\Core\Path\AliasStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path.alias_storage service.
   *
   * @var \Drupal\Core\Path\AliasStorageInterface
   */
  protected $aliasStorage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\AliasStorageInterface $alias_storage
   *   The alias_storage service.
   */
   public function __construct(AliasStorageInterface $alias_storage) {
     $this->aliasStorage = $alias_storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.alias_storage')
    );
  }

}
