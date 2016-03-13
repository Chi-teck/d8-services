<?php

/**
 * @file
 * Example of usage the access_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\AccessManager;
// The service interfaces.
use Drupal\Core\Access\AccessManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_manager service.
   *
   * @var \Drupal\Core\Access\AccessManagerInterface
   */
  protected $accessManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\AccessManagerInterface $access_manager
   *   The access_manager service.
   */
   public function __construct(AccessManagerInterface $access_manager) {
     $this->accessManager = $access_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_manager')
    );
  }

}
