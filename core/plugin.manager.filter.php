<?php

/**
 * @file
 * Example of usage the plugin.manager.filter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\filter\FilterPluginManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\FallbackPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.filter service.
   *
   * @var \Drupal\filter\FilterPluginManager
   */
  protected $filter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\filter\FilterPluginManager $filter
   *   The filter service.
   */
   public function __construct(FilterPluginManager $filter) {
     $this->filter = $filter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.filter')
    );
  }

}
