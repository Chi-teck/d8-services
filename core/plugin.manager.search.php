<?php

/**
 * @file
 * Example of usage the plugin.manager.search service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\search\SearchPluginManager;
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
   * The plugin.manager.search service.
   *
   * @var \Drupal\search\SearchPluginManager
   */
  protected $search;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\search\SearchPluginManager $search
   *   The search service.
   */
   public function __construct(SearchPluginManager $search) {
     $this->search = $search;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.search')
    );
  }

}
