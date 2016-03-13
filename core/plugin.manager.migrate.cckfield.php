<?php

/**
 * @file
 * Example of usage the plugin.manager.migrate.cckfield service.
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
   * The plugin.manager.migrate.cckfield service.
   *
   * @var \Drupal\migrate\Plugin\MigratePluginManager
   */
  protected $cckfield;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\migrate\Plugin\MigratePluginManager $cckfield
   *   The cckfield service.
   */
   public function __construct(MigratePluginManager $cckfield) {
     $this->cckfield = $cckfield;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.migrate.cckfield')
    );
  }

}
