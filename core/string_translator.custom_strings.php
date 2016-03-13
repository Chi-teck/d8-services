<?php

/**
 * @file
 * Example of usage the string_translator.custom_strings service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StringTranslation\Translator\CustomStrings;
// The service interfaces.
use Drupal\Core\StringTranslation\Translator\TranslatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The string_translator.custom_strings service.
   *
   * @var \Drupal\Core\StringTranslation\Translator\CustomStrings
   */
  protected $customStrings;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StringTranslation\Translator\CustomStrings $custom_strings
   *   The custom_strings service.
   */
   public function __construct(CustomStrings $custom_strings) {
     $this->customStrings = $custom_strings;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('string_translator.custom_strings')
    );
  }

}
