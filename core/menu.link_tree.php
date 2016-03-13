<?php

/**
 * @file
 * Example of usage the menu.link_tree service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\MenuLinkTree;
// The service interfaces.
use Drupal\Core\Menu\MenuLinkTreeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The menu.link_tree service.
   *
   * @var \Drupal\Core\Menu\MenuLinkTreeInterface
   */
  protected $linkTree;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\MenuLinkTreeInterface $link_tree
   *   The link_tree service.
   */
   public function __construct(MenuLinkTreeInterface $link_tree) {
     $this->linkTree = $link_tree;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu.link_tree')
    );
  }

}
