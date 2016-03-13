<?php

/**
 * @file
 * Example of usage the transliteration service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Transliteration\PhpTransliteration;
// The service interfaces.
use Drupal\Component\Transliteration\TransliterationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The transliteration service.
   *
   * @var \Drupal\Core\Transliteration\PhpTransliteration
   */
  protected $transliteration;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Transliteration\PhpTransliteration $transliteration
   *   The transliteration service.
   */
   public function __construct(PhpTransliteration $transliteration) {
     $this->transliteration = $transliteration;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('transliteration')
    );
  }

}
