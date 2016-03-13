<?php

/**
 * @file
 * Example of usage the path_processor.files service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\PathProcessor\PathProcessorFiles;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor.files service.
   *
   * @var \Drupal\system\PathProcessor\PathProcessorFiles
   */
  protected $files;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\PathProcessor\PathProcessorFiles $files
   *   The files service.
   */
   public function __construct(PathProcessorFiles $files) {
     $this->files = $files;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor.files')
    );
  }

}
