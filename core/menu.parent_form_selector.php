<?php

/**
 * @file
 * Example of usage the menu.parent_form_selector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Menu\MenuParentFormSelector;
// The service interfaces.
use Drupal\Core\Menu\MenuParentFormSelectorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The menu.parent_form_selector service.
   *
   * @var \Drupal\Core\Menu\MenuParentFormSelectorInterface
   */
  protected $parentFormSelector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Menu\MenuParentFormSelectorInterface $parent_form_selector
   *   The parent_form_selector service.
   */
   public function __construct(MenuParentFormSelectorInterface $parent_form_selector) {
     $this->parentFormSelector = $parent_form_selector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu.parent_form_selector')
    );
  }

}
