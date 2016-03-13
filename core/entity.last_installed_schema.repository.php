<?php

/**
 * @file
 * Example of usage the entity.last_installed_schema.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityLastInstalledSchemaRepository;
// The service interfaces.
use Drupal\Core\Entity\EntityLastInstalledSchemaRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.last_installed_schema.repository service.
   *
   * @var \Drupal\Core\Entity\EntityLastInstalledSchemaRepositoryInterface
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityLastInstalledSchemaRepositoryInterface $repository
   *   The repository service.
   */
   public function __construct(EntityLastInstalledSchemaRepositoryInterface $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.last_installed_schema.repository')
    );
  }

}
