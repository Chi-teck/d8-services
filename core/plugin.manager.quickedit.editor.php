<?php

/**
 * @file
 * Example of usage the plugin.manager.quickedit.editor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\quickedit\Plugin\InPlaceEditorManager;
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
   * The plugin.manager.quickedit.editor service.
   *
   * @var \Drupal\quickedit\Plugin\InPlaceEditorManager
   */
  protected $editor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\quickedit\Plugin\InPlaceEditorManager $editor
   *   The editor service.
   */
   public function __construct(InPlaceEditorManager $editor) {
     $this->editor = $editor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.quickedit.editor')
    );
  }

}
