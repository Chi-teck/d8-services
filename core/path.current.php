<?php

/**
 * @file
 * Example of usage the path.current service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\CurrentPathStack;

/**
 * The example.
 */
class Example {

  /**
   * The path.current service.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  protected $current;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\CurrentPathStack $current
   *   The current service.
   */
   public function __construct(CurrentPathStack $current) {
     $this->current = $current;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.current')
    );
  }

}
