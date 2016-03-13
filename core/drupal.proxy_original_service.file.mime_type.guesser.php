<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.file.mime_type.guesser service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\File\MimeType\MimeTypeGuesser;
// The service interfaces.
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.file.mime_type.guesser service.
   *
   * @var \Drupal\Core\File\MimeType\MimeTypeGuesser
   */
  protected $guesser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\File\MimeType\MimeTypeGuesser $guesser
   *   The guesser service.
   */
   public function __construct(MimeTypeGuesser $guesser) {
     $this->guesser = $guesser;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.file.mime_type.guesser')
    );
  }

}
