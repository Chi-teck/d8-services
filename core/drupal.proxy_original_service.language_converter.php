<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.language_converter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\LanguageConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.language_converter service.
   *
   * @var \Drupal\language\LanguageConverter
   */
  protected $languageConverter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\LanguageConverter $language_converter
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
      $container->get('drupal.proxy_original_service.language_converter')
    );
  }

}
