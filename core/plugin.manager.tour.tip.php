<?php

/**
 * @file
 * Example of usage the plugin.manager.tour.tip service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\tour\TipPluginManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.tour.tip service.
   *
   * @var \Drupal\tour\TipPluginManager
   */
  protected $tip;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\tour\TipPluginManager $tip
   *   The tip service.
   */
   public function __construct(TipPluginManager $tip) {
     $this->tip = $tip;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.tour.tip')
    );
  }

}
