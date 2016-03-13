<?php

/**
 * @file
 * Example of usage the entity_type.listener service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityTypeListener;
// The service interfaces.
use Drupal\Core\Entity\EntityTypeListenerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_type.listener service.
   *
   * @var \Drupal\Core\Entity\EntityTypeListenerInterface
   */
  protected $listener;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityTypeListenerInterface $listener
   *   The listener service.
   */
   public function __construct(EntityTypeListenerInterface $listener) {
     $this->listener = $listener;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.listener')
    );
  }

}
