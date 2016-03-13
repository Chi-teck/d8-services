<?php

/**
 * @file
 * Example of usage the keyvalue.database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\KeyValueStore\KeyValueDatabaseFactory;
// The service interfaces.
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The keyvalue.database service.
   *
   * @var \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory
   */
  protected $database;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory $database
   *   The database service.
   */
   public function __construct(KeyValueDatabaseFactory $database) {
     $this->database = $database;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('keyvalue.database')
    );
  }

}
