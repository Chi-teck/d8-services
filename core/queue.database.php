<?php

/**
 * @file
 * Example of usage the queue.database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Queue\QueueDatabaseFactory;

/**
 * The example.
 */
class Example {

  /**
   * The queue.database service.
   *
   * @var \Drupal\Core\Queue\QueueDatabaseFactory
   */
  protected $database;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Queue\QueueDatabaseFactory $database
   *   The database service.
   */
   public function __construct(QueueDatabaseFactory $database) {
     $this->database = $database;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('queue.database')
    );
  }

}
