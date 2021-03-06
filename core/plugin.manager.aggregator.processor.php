<?php

/**
 * @file
 * Example of usage the plugin.manager.aggregator.processor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\aggregator\Plugin\AggregatorPluginManager;
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
   * The plugin.manager.aggregator.processor service.
   *
   * @var \Drupal\aggregator\Plugin\AggregatorPluginManager
   */
  protected $processor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\aggregator\Plugin\AggregatorPluginManager $processor
   *   The processor service.
   */
   public function __construct(AggregatorPluginManager $processor) {
     $this->processor = $processor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.aggregator.processor')
    );
  }

}
