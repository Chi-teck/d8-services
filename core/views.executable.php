<?php

/**
 * @file
 * Example of usage the views.executable service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\ViewExecutableFactory;

/**
 * The example.
 */
class Example {

  /**
   * The views.executable service.
   *
   * @var \Drupal\views\ViewExecutableFactory
   */
  protected $executable;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\ViewExecutableFactory $executable
   *   The executable service.
   */
   public function __construct(ViewExecutableFactory $executable) {
     $this->executable = $executable;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.executable')
    );
  }

}
