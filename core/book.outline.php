<?php

/**
 * @file
 * Example of usage the book.outline service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookOutline;

/**
 * The example.
 */
class Example {

  /**
   * The book.outline service.
   *
   * @var \Drupal\book\BookOutline
   */
  protected $outline;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookOutline $outline
   *   The outline service.
   */
   public function __construct(BookOutline $outline) {
     $this->outline = $outline;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('book.outline')
    );
  }

}
