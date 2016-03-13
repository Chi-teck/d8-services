<?php

/**
 * @file
 * Example of usage the update.post_update_registry service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Update\UpdateRegistry;

/**
 * The example.
 */
class Example {

  /**
   * The update.post_update_registry service.
   *
   * @var \Drupal\Core\Update\UpdateRegistry
   */
  protected $postUpdateRegistry;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Update\UpdateRegistry $post_update_registry
   *   The post_update_registry service.
   */
   public function __construct(UpdateRegistry $post_update_registry) {
     $this->postUpdateRegistry = $post_update_registry;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('update.post_update_registry')
    );
  }

}
