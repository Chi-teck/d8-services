<?php

/**
 * @file
 * Example of usage the stream_wrapper.translations service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\StreamWrapper\TranslationsStream;
// The service interfaces.
use Drupal\Core\StreamWrapper\PhpStreamWrapperInterface;
use Drupal\Core\StreamWrapper\StreamWrapperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The stream_wrapper.translations service.
   *
   * @var \Drupal\locale\StreamWrapper\TranslationsStream
   */
  protected $translations;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\StreamWrapper\TranslationsStream $translations
   *   The translations service.
   */
   public function __construct(TranslationsStream $translations) {
     $this->translations = $translations;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('stream_wrapper.translations')
    );
  }

}
