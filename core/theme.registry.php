<?php

/**
 * @file
 * Example of usage the theme.registry service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\Registry;
// The service interfaces.
use Drupal\Core\DestructableInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.registry service.
   *
   * @var \Drupal\Core\Theme\Registry
   */
  protected $registry;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\Registry $registry
   *   The registry service.
   */
   public function __construct(Registry $registry) {
     $this->registry = $registry;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.registry')
    );
  }

}
