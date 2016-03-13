<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.paramconverter.menu_link service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ParamConverter\MenuLinkPluginConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.paramconverter.menu_link service.
   *
   * @var \Drupal\Core\ParamConverter\MenuLinkPluginConverter
   */
  protected $menuLink;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ParamConverter\MenuLinkPluginConverter $menu_link
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
      $container->get('drupal.proxy_original_service.paramconverter.menu_link')
    );
  }

}
