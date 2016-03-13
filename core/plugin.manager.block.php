<?php

/**
 * @file
 * Example of usage the plugin.manager.block service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Block\BlockManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Block\BlockManagerInterface;
use Drupal\Component\Plugin\CategorizingPluginManagerInterface;
use Drupal\Core\Plugin\Context\ContextAwarePluginManagerInterface;
use Drupal\Component\Plugin\FallbackPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.block service.
   *
   * @var \Drupal\Core\Block\BlockManagerInterface
   */
  protected $block;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Block\BlockManagerInterface $block
   *   The block service.
   */
   public function __construct(BlockManagerInterface $block) {
     $this->block = $block;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.block')
    );
  }

}
