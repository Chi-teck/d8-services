<?php

/**
 * @file
 * Example of usage the file_system service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\File\FileSystem;
// The service interfaces.
use Drupal\Core\File\FileSystemInterface;

/**
 * The example.
 */
class Example {

  /**
   * The file_system service.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\File\FileSystemInterface $file_system
   *   The file_system service.
   */
   public function __construct(FileSystemInterface $file_system) {
     $this->fileSystem = $file_system;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('file_system')
    );
  }

}
