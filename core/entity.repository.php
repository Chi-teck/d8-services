<?php

/**
 * @file
 * Example of usage the entity.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityRepository;
// The service interfaces.
use Drupal\Core\Entity\EntityRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.repository service.
   *
   * @var \Drupal\Core\Entity\EntityRepositoryInterface
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityRepositoryInterface $repository
   *   The repository service.
   */
   public function __construct(EntityRepositoryInterface $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.repository')
    );
  }

}
