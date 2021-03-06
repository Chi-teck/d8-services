<?php

/**
 * @file
 * Example of usage the plugin.manager.views.sort service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\Plugin\ViewsHandlerManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\FallbackPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.views.sort service.
   *
   * @var \Drupal\views\Plugin\ViewsHandlerManager
   */
  protected $sort;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Plugin\ViewsHandlerManager $sort
   *   The sort service.
   */
   public function __construct(ViewsHandlerManager $sort) {
     $this->sort = $sort;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.views.sort')
    );
  }

}
