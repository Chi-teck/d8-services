<?php

/**
 * @file
 * Example of usage the database.replica service.
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
   * The database.replica service.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $replica;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Database\Driver\mysql\Connection $replica
   *   The replica service.
   */
   public function __construct(Connection $replica) {
     $this->replica = $replica;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database.replica')
    );
  }

}
