<?php

/**
 * @file
 * Example of usage the entity_display.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityDisplayRepository;
// The service interfaces.
use Drupal\Core\Entity\EntityDisplayRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_display.repository service.
   *
   * @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityDisplayRepositoryInterface $repository
   *   The repository service.
   */
   public function __construct(EntityDisplayRepositoryInterface $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_display.repository')
    );
  }

}
