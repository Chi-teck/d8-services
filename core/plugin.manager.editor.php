<?php

/**
 * @file
 * Example of usage the plugin.manager.editor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\editor\Plugin\EditorManager;
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
   * The plugin.manager.editor service.
   *
   * @var \Drupal\editor\Plugin\EditorManager
   */
  protected $editor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\editor\Plugin\EditorManager $editor
   *   The editor service.
   */
   public function __construct(EditorManager $editor) {
     $this->editor = $editor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.editor')
    );
  }

}
