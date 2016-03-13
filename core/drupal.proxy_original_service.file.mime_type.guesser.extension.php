<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.file.mime_type.guesser.extension service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser;
// The service interfaces.
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.file.mime_type.guesser.extension service.
   *
   * @var \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser
   */
  protected $extension;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser $extension
   *   The extension service.
   */
   public function __construct(ExtensionMimeTypeGuesser $extension) {
     $this->extension = $extension;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.file.mime_type.guesser.extension')
    );
  }

}
