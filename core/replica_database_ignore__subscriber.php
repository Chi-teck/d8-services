<?php

/**
 * @file
 * Example of usage the replica_database_ignore__subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The replica_database_ignore__subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber
   */
  protected $replicaDatabaseIgnoreSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber $replica_database_ignore__subscriber
   *   The replica_database_ignore__subscriber service.
   */
   public function __construct(ReplicaDatabaseIgnoreSubscriber $replica_database_ignore__subscriber) {
     $this->replicaDatabaseIgnoreSubscriber = $replica_database_ignore__subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('replica_database_ignore__subscriber')
    );
  }

}
