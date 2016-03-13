<?php

/**
 * @file
 * Example of usage the plugin.manager.views.query service.
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
   * The plugin.manager.views.query service.
   *
   * @var \Drupal\views\Plugin\ViewsPluginManager
   */
  protected $query;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Plugin\ViewsPluginManager $query
   *   The query service.
   */
   public function __construct(ViewsPluginManager $query) {
     $this->query = $query;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.views.query')
    );
  }

}
