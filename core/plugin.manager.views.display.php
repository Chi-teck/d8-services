<?php

/**
 * @file
 * Example of usage the plugin.manager.views.display service.
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
   * The plugin.manager.views.display service.
   *
   * @var \Drupal\views\Plugin\ViewsPluginManager
   */
  protected $display;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Plugin\ViewsPluginManager $display
   *   The display service.
   */
   public function __construct(ViewsPluginManager $display) {
     $this->display = $display;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.views.display')
    );
  }

}
