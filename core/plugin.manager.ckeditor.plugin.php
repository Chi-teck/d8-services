<?php

/**
 * @file
 * Example of usage the plugin.manager.ckeditor.plugin service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\ckeditor\CKEditorPluginManager;
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
   * The plugin.manager.ckeditor.plugin service.
   *
   * @var \Drupal\ckeditor\CKEditorPluginManager
   */
  protected $plugin;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\ckeditor\CKEditorPluginManager $plugin
   *   The plugin service.
   */
   public function __construct(CKEditorPluginManager $plugin) {
     $this->plugin = $plugin;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.ckeditor.plugin')
    );
  }

}
