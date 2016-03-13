<?php

/**
 * @file
 * Example of usage the update.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\update\UpdateManager;
// The service interfaces.
use Drupal\update\UpdateManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The update.manager service.
   *
   * @var \Drupal\update\UpdateManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\update\UpdateManagerInterface $manager
   *   The manager service.
   */
   public function __construct(UpdateManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('update.manager')
    );
  }

}
