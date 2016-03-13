<?php

/**
 * @file
 * Example of usage the book.export service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookExport;

/**
 * The example.
 */
class Example {

  /**
   * The book.export service.
   *
   * @var \Drupal\book\BookExport
   */
  protected $export;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookExport $export
   *   The export service.
   */
   public function __construct(BookExport $export) {
     $this->export = $export;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('book.export')
    );
  }

}
