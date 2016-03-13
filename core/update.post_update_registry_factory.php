<?php

/**
 * @file
 * Example of usage the update.post_update_registry_factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Update\UpdateRegistryFactory;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The update.post_update_registry_factory service.
   *
   * @var \Drupal\Core\Update\UpdateRegistryFactory
   */
  protected $postUpdateRegistryFactory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Update\UpdateRegistryFactory $post_update_registry_factory
   *   The post_update_registry_factory service.
   */
   public function __construct(UpdateRegistryFactory $post_update_registry_factory) {
     $this->postUpdateRegistryFactory = $post_update_registry_factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('update.post_update_registry_factory')
    );
  }

}
