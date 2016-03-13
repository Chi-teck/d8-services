<?php

/**
 * @file
 * Example of usage the plugin.manager.migrate.builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\migrate\Plugin\MigratePluginManager;
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
   * The plugin.manager.migrate.builder service.
   *
   * @var \Drupal\migrate\Plugin\MigratePluginManager
   */
  protected $builder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\migrate\Plugin\MigratePluginManager $builder
   *   The builder service.
   */
   public function __construct(MigratePluginManager $builder) {
     $this->builder = $builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.migrate.builder')
    );
  }

}
