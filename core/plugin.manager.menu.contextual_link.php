<?php

/**
 * @file
 * Example of usage the plugin.manager.menu.contextual_link service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\ContextualLinkManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Menu\ContextualLinkManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.menu.contextual_link service.
   *
   * @var \Drupal\Core\Menu\ContextualLinkManagerInterface
   */
  protected $contextualLink;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\ContextualLinkManagerInterface $contextual_link
   *   The contextual_link service.
   */
   public function __construct(ContextualLinkManagerInterface $contextual_link) {
     $this->contextualLink = $contextual_link;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.menu.contextual_link')
    );
  }

}
