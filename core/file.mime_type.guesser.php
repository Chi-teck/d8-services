<?php

/**
 * @file
 * Example of usage the file.mime_type.guesser service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser;
// The service interfaces.
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The file.mime_type.guesser service.
   *
   * @var \Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser
   */
  protected $guesser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser $guesser
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
      $container->get('file.mime_type.guesser')
    );
  }

}
