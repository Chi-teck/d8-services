<?php

/**
 * @file
 * Example of usage the database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Database\Connection;

/**
 * The example.
 */
class Example {

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection;
   */
  protected $connection;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Database\Connection $connection
   *   The database connection.
   */
   public function __construct(Connection $connection) {
     $this->connection = $connection;
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
