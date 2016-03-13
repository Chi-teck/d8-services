<?php

/**
 * @file
 * Example of usage the menu.default_tree_manipulators service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\DefaultMenuLinkTreeManipulators;

/**
 * The example.
 */
class Example {

  /**
   * The menu.default_tree_manipulators service.
   *
   * @var \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators
   */
  protected $defaultTreeManipulators;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators $default_tree_manipulators
   *   The default_tree_manipulators service.
   */
   public function __construct(DefaultMenuLinkTreeManipulators $default_tree_manipulators) {
     $this->defaultTreeManipulators = $default_tree_manipulators;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu.default_tree_manipulators')
    );
  }

}
