<?php

/**
 * @file
 * Example of usage the database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Database\Driver\mysql\Connection;

/**
 * The example.
 */
class Example {

  /**
   * The database service.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Database\Driver\mysql\Connection $database
   *   The database service.
   */
   public function __construct(Connection $database) {
     $this->database = $database;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database')
    );
  }

}
