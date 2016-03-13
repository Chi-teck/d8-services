<?php

/**
 * @file
 * Example of usage the plugin.manager.image.effect service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\image\ImageEffectManager;
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
   * The plugin.manager.image.effect service.
   *
   * @var \Drupal\image\ImageEffectManager
   */
  protected $effect;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\image\ImageEffectManager $effect
   *   The effect service.
   */
   public function __construct(ImageEffectManager $effect) {
     $this->effect = $effect;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.image.effect')
    );
  }

}
