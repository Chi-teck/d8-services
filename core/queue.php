<?php

/**
 * @file
 * Example of usage the queue service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Queue\QueueFactory;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The queue service.
   *
   * @var \Drupal\Core\Queue\QueueFactory
   */
  protected $queue;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Queue\QueueFactory $queue
   *   The queue service.
   */
   public function __construct(QueueFactory $queue) {
     $this->queue = $queue;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('queue')
    );
  }

}
