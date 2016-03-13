<?php

/**
 * @file
 * Example of usage the flood service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Flood\DatabaseBackend;
// The service interfaces.
use Drupal\Core\Flood\FloodInterface;

/**
 * The example.
 */
class Example {

  /**
   * The flood service.
   *
   * @var \Drupal\Core\Flood\DatabaseBackend
   */
  protected $flood;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Flood\DatabaseBackend $flood
   *   The flood service.
   */
   public function __construct(DatabaseBackend $flood) {
     $this->flood = $flood;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('flood')
    );
  }

}
