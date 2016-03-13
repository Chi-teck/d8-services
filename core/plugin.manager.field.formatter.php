<?php

/**
 * @file
 * Example of usage the plugin.manager.field.formatter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Field\FormatterPluginManager;
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
   * The plugin.manager.field.formatter service.
   *
   * @var \Drupal\Core\Field\FormatterPluginManager
   */
  protected $formatter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Field\FormatterPluginManager $formatter
   *   The formatter service.
   */
   public function __construct(FormatterPluginManager $formatter) {
     $this->formatter = $formatter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.field.formatter')
    );
  }

}
