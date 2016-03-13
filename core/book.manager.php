<?php

/**
 * @file
 * Example of usage the book.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookManager;
// The service interfaces.
use Drupal\book\BookManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The book.manager service.
   *
   * @var \Drupal\book\BookManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookManagerInterface $manager
   *   The manager service.
   */
   public function __construct(BookManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('book.manager')
    );
  }

}
