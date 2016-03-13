<?php

/**
 * @file
 * Example of usage the entity_bundle.listener service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityBundleListener;
// The service interfaces.
use Drupal\Core\Entity\EntityBundleListenerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_bundle.listener service.
   *
   * @var \Drupal\Core\Entity\EntityBundleListenerInterface
   */
  protected $listener;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityBundleListenerInterface $listener
   *   The listener service.
   */
   public function __construct(EntityBundleListenerInterface $listener) {
     $this->listener = $listener;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_bundle.listener')
    );
  }

}
