<?php

/**
 * @file
 * Example of usage the plugin.manager.menu.local_action service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\LocalActionManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Menu\LocalActionManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.menu.local_action service.
   *
   * @var \Drupal\Core\Menu\LocalActionManagerInterface
   */
  protected $localAction;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\LocalActionManagerInterface $local_action
   *   The local_action service.
   */
   public function __construct(LocalActionManagerInterface $local_action) {
     $this->localAction = $local_action;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.menu.local_action')
    );
  }

}
