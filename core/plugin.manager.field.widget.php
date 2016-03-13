<?php

/**
 * @file
 * Example of usage the plugin.manager.field.widget service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Field\WidgetPluginManager;
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
   * The plugin.manager.field.widget service.
   *
   * @var \Drupal\Core\Field\WidgetPluginManager
   */
  protected $widget;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Field\WidgetPluginManager $widget
   *   The widget service.
   */
   public function __construct(WidgetPluginManager $widget) {
     $this->widget = $widget;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.field.widget')
    );
  }

}
