<?php

/**
 * @file
 * Example of usage the plugin.manager.views.display_extender service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\Plugin\ViewsPluginManager;
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
   * The plugin.manager.views.display_extender service.
   *
   * @var \Drupal\views\Plugin\ViewsPluginManager
   */
  protected $displayExtender;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Plugin\ViewsPluginManager $display_extender
   *   The display_extender service.
   */
   public function __construct(ViewsPluginManager $display_extender) {
     $this->displayExtender = $display_extender;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.views.display_extender')
    );
  }

}
