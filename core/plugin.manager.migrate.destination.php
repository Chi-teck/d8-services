<?php

/**
 * @file
 * Example of usage the plugin.manager.migrate.destination service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\migrate\Plugin\MigrateDestinationPluginManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.migrate.destination service.
   *
   * @var \Drupal\migrate\Plugin\MigrateDestinationPluginManager
   */
  protected $destination;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\migrate\Plugin\MigrateDestinationPluginManager $destination
   *   The destination service.
   */
   public function __construct(MigrateDestinationPluginManager $destination) {
     $this->destination = $destination;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.migrate.destination')
    );
  }

}
