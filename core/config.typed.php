<?php

/**
 * @file
 * Example of usage the config.typed service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\TypedConfigManager;
// The service interfaces.
use Drupal\Core\TypedData\TypedDataManagerInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Core\Config\TypedConfigManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.typed service.
   *
   * @var \Drupal\Core\Config\TypedConfigManagerInterface
   */
  protected $typed;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\TypedConfigManagerInterface $typed
   *   The typed service.
   */
   public function __construct(TypedConfigManagerInterface $typed) {
     $this->typed = $typed;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.typed')
    );
  }

}
