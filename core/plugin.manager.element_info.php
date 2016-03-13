<?php

/**
 * @file
 * Example of usage the plugin.manager.element_info service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\ElementInfoManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Render\ElementInfoManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.element_info service.
   *
   * @var \Drupal\Core\Render\ElementInfoManagerInterface
   */
  protected $elementInfo;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\ElementInfoManagerInterface $element_info
   *   The element_info service.
   */
   public function __construct(ElementInfoManagerInterface $element_info) {
     $this->elementInfo = $element_info;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.element_info')
    );
  }

}
