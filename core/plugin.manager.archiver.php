<?php

/**
 * @file
 * Example of usage the plugin.manager.archiver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Archiver\ArchiverManager;
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
   * The plugin.manager.archiver service.
   *
   * @var \Drupal\Core\Archiver\ArchiverManager
   */
  protected $archiver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Archiver\ArchiverManager $archiver
   *   The archiver service.
   */
   public function __construct(ArchiverManager $archiver) {
     $this->archiver = $archiver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.archiver')
    );
  }

}
