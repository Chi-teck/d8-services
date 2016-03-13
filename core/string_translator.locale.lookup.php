<?php

/**
 * @file
 * Example of usage the string_translator.locale.lookup service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\LocaleTranslation;
// The service interfaces.
use Drupal\Core\StringTranslation\Translator\TranslatorInterface;
use Drupal\Core\DestructableInterface;

/**
 * The example.
 */
class Example {

  /**
   * The string_translator.locale.lookup service.
   *
   * @var \Drupal\locale\LocaleTranslation
   */
  protected $lookup;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\LocaleTranslation $lookup
   *   The lookup service.
   */
   public function __construct(LocaleTranslation $lookup) {
     $this->lookup = $lookup;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('string_translator.locale.lookup')
    );
  }

}
