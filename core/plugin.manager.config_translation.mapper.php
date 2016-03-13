<?php

/**
 * @file
 * Example of usage the plugin.manager.config_translation.mapper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\config_translation\ConfigMapperManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\config_translation\ConfigMapperManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.config_translation.mapper service.
   *
   * @var \Drupal\config_translation\ConfigMapperManagerInterface
   */
  protected $mapper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\config_translation\ConfigMapperManagerInterface $mapper
   *   The mapper service.
   */
   public function __construct(ConfigMapperManagerInterface $mapper) {
     $this->mapper = $mapper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.config_translation.mapper')
    );
  }

}
