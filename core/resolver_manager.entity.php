<?php

/**
 * @file
 * Example of usage the resolver_manager.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityResolverManager;

/**
 * The example.
 */
class Example {

  /**
   * The resolver_manager.entity service.
   *
   * @var \Drupal\Core\Entity\EntityResolverManager
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityResolverManager $entity
   *   The entity service.
   */
   public function __construct(EntityResolverManager $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('resolver_manager.entity')
    );
  }

}
