<?php

/**
 * @file
 * Example of usage the plugin.manager.menu.local_task service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\LocalTaskManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Menu\LocalTaskManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.menu.local_task service.
   *
   * @var \Drupal\Core\Menu\LocalTaskManagerInterface
   */
  protected $localTask;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\LocalTaskManagerInterface $local_task
   *   The local_task service.
   */
   public function __construct(LocalTaskManagerInterface $local_task) {
     $this->localTask = $local_task;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.menu.local_task')
    );
  }

}
