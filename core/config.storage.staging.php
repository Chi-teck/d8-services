<?php

/**
 * @file
 * Example of usage the config.storage.staging service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\FileStorage;
// The service interfaces.
use Drupal\Core\Config\StorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.storage.staging service.
   *
   * @var \Drupal\Core\Config\FileStorage
   */
  protected $staging;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\FileStorage $staging
   *   The staging service.
   */
   public function __construct(FileStorage $staging) {
     $this->staging = $staging;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.storage.staging')
    );
  }

}
