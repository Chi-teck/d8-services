<?php

/**
 * @file
 * Example of usage the access_check.book.removable service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\Access\BookNodeIsRemovableAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.book.removable service.
   *
   * @var \Drupal\book\Access\BookNodeIsRemovableAccessCheck
   */
  protected $removable;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\Access\BookNodeIsRemovableAccessCheck $removable
   *   The removable service.
   */
   public function __construct(BookNodeIsRemovableAccessCheck $removable) {
     $this->removable = $removable;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.book.removable')
    );
  }

}
