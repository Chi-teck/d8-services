<?php

/**
 * @file
 * Example of usage the system.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\SystemManager;

/**
 * The example.
 */
class Example {

  /**
   * The system.manager service.
   *
   * @var \Drupal\system\SystemManager
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\SystemManager $manager
   *   The manager service.
   */
   public function __construct(SystemManager $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('system.manager')
    );
  }

}
