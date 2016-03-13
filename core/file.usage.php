<?php

/**
 * @file
 * Example of usage the file.usage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\file\FileUsage\DatabaseFileUsageBackend;
// The service interfaces.
use Drupal\file\FileUsage\FileUsageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The file.usage service.
   *
   * @var \Drupal\file\FileUsage\DatabaseFileUsageBackend
   */
  protected $usage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\file\FileUsage\DatabaseFileUsageBackend $usage
   *   The usage service.
   */
   public function __construct(DatabaseFileUsageBackend $usage) {
     $this->usage = $usage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('file.usage')
    );
  }

}
