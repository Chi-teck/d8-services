<?php

/**
 * @file
 * Example of usage the plugin.manager.views.exposed_form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\Plugin\ViewsPluginManager;
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
   * The plugin.manager.views.exposed_form service.
   *
   * @var \Drupal\views\Plugin\ViewsPluginManager
   */
  protected $exposedForm;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Plugin\ViewsPluginManager $exposed_form
   *   The exposed_form service.
   */
   public function __construct(ViewsPluginManager $exposed_form) {
     $this->exposedForm = $exposed_form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.views.exposed_form')
    );
  }

}
