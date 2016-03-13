<?php

/**
 * @file
 * Example of usage the migrate.migration_builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\migrate\MigrationBuilder;
// The service interfaces.
use Drupal\migrate\MigrationBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The migrate.migration_builder service.
   *
   * @var \Drupal\migrate\MigrationBuilderInterface
   */
  protected $migrationBuilder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\migrate\MigrationBuilderInterface $migration_builder
   *   The migration_builder service.
   */
   public function __construct(MigrationBuilderInterface $migration_builder) {
     $this->migrationBuilder = $migration_builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('migrate.migration_builder')
    );
  }

}
