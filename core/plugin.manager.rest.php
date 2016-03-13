<?php

/**
 * @file
 * Example of usage the plugin.manager.rest service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\Plugin\Type\ResourcePluginManager;
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
   * The plugin.manager.rest service.
   *
   * @var \Drupal\rest\Plugin\Type\ResourcePluginManager
   */
  protected $rest;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\Plugin\Type\ResourcePluginManager $rest
   *   The rest service.
   */
   public function __construct(ResourcePluginManager $rest) {
     $this->rest = $rest;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.rest')
    );
  }

}
