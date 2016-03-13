<?php

/**
 * @file
 * Example of usage the file.mime_type.guesser.extension service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser;
// The service interfaces.
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The file.mime_type.guesser.extension service.
   *
   * @var \Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser
   */
  protected $extension;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser $extension
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
      $container->get('file.mime_type.guesser.extension')
    );
  }

}
