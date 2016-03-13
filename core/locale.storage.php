<?php

/**
 * @file
 * Example of usage the locale.storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\StringDatabaseStorage;
// The service interfaces.
use Drupal\locale\StringStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The locale.storage service.
   *
   * @var \Drupal\locale\StringDatabaseStorage
   */
  protected $storage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\StringDatabaseStorage $storage
   *   The storage service.
   */
   public function __construct(StringDatabaseStorage $storage) {
     $this->storage = $storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.storage')
    );
  }

}
