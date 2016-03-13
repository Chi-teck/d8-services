<?php

/**
 * @file
 * Example of usage the keyvalue.expirable.database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory;
// The service interfaces.
use Drupal\Core\KeyValueStore\KeyValueExpirableFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The keyvalue.expirable.database service.
   *
   * @var \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory
   */
  protected $database;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory $database
   *   The database service.
   */
   public function __construct(KeyValueDatabaseExpirableFactory $database) {
     $this->database = $database;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('keyvalue.expirable.database')
    );
  }

}
