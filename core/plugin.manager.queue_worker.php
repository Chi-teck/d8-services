<?php

/**
 * @file
 * Example of usage the plugin.manager.queue_worker service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Queue\QueueWorkerManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Queue\QueueWorkerManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.queue_worker service.
   *
   * @var \Drupal\Core\Queue\QueueWorkerManagerInterface
   */
  protected $queueWorker;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Queue\QueueWorkerManagerInterface $queue_worker
   *   The queue_worker service.
   */
   public function __construct(QueueWorkerManagerInterface $queue_worker) {
     $this->queueWorker = $queue_worker;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.queue_worker')
    );
  }

}
