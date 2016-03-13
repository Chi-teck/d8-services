<?php

/**
 * @file
 * Example of usage the book.outline_storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookOutlineStorage;
// The service interfaces.
use Drupal\book\BookOutlineStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The book.outline_storage service.
   *
   * @var \Drupal\book\BookOutlineStorageInterface
   */
  protected $outlineStorage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookOutlineStorageInterface $outline_storage
   *   The outline_storage service.
   */
   public function __construct(BookOutlineStorageInterface $outline_storage) {
     $this->outlineStorage = $outline_storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('book.outline_storage')
    );
  }

}
