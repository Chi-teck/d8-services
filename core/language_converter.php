<?php

/**
 * @file
 * Example of usage the language_converter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\ProxyClass\LanguageConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language_converter service.
   *
   * @var \Drupal\language\ProxyClass\LanguageConverter
   */
  protected $languageConverter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\ProxyClass\LanguageConverter $language_converter
   *   The language_converter service.
   */
   public function __construct(LanguageConverter $language_converter) {
     $this->languageConverter = $language_converter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language_converter')
    );
  }

}
