<?php

/**
 * @file
 * Example of usage the plugin.manager.display_variant service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Display\VariantManager;
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
   * The plugin.manager.display_variant service.
   *
   * @var \Drupal\Core\Display\VariantManager
   */
  protected $displayVariant;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Display\VariantManager $display_variant
   *   The display_variant service.
   */
   public function __construct(VariantManager $display_variant) {
     $this->displayVariant = $display_variant;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.display_variant')
    );
  }

}
