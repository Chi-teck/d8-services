<?php

/**
 * @file
 * Example of usage the paramconverter.menu_link service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter.menu_link service.
   *
   * @var \Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter
   */
  protected $menuLink;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter $menu_link
   *   The menu_link service.
   */
   public function __construct(MenuLinkPluginConverter $menu_link) {
     $this->menuLink = $menu_link;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter.menu_link')
    );
  }

}
