<?php

/**
 * @file
 * Example of usage the toolbar.menu_tree service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\toolbar\Menu\ToolbarMenuLinkTree;
// The service interfaces.
use Drupal\Core\Menu\MenuLinkTreeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The toolbar.menu_tree service.
   *
   * @var \Drupal\toolbar\Menu\ToolbarMenuLinkTree
   */
  protected $menuTree;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\toolbar\Menu\ToolbarMenuLinkTree $menu_tree
   *   The menu_tree service.
   */
   public function __construct(ToolbarMenuLinkTree $menu_tree) {
     $this->menuTree = $menu_tree;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('toolbar.menu_tree')
    );
  }

}
