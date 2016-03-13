<?php

/**
 * @file
 * Example of usage the aggregator.items.importer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\aggregator\ItemsImporter;
// The service interfaces.
use Drupal\aggregator\ItemsImporterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The aggregator.items.importer service.
   *
   * @var \Drupal\aggregator\ItemsImporterInterface
   */
  protected $importer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\aggregator\ItemsImporterInterface $importer
   *   The importer service.
   */
   public function __construct(ItemsImporterInterface $importer) {
     $this->importer = $importer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('aggregator.items.importer')
    );
  }

}
