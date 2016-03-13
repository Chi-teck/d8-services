<?php

/**
 * @file
 * Example of usage the string_translation service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StringTranslation\TranslationManager;
// The service interfaces.
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\Core\StringTranslation\Translator\TranslatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The string_translation service.
   *
   * @var \Drupal\Core\StringTranslation\TranslationManager
   */
  protected $stringTranslation;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StringTranslation\TranslationManager $string_translation
   *   The string_translation service.
   */
   public function __construct(TranslationManager $string_translation) {
     $this->stringTranslation = $string_translation;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('string_translation')
    );
  }

}
