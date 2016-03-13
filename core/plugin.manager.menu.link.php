<?php

/**
 * @file
 * Example of usage the plugin.manager.menu.link service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\MenuLinkManager;
// The service interfaces.
use Drupal\Core\Menu\MenuLinkManagerInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\PluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.menu.link service.
   *
   * @var \Drupal\Core\Menu\MenuLinkManagerInterface
   */
  protected $link;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\MenuLinkManagerInterface $link
   *   The link service.
   */
   public function __construct(MenuLinkManagerInterface $link) {
     $this->link = $link;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.menu.link')
    );
  }

}
