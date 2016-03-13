<?php

/**
 * @file
 * Example of usage the language_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\ConfigurableLanguageManager;
// The service interfaces.
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\language\ConfigurableLanguageManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language_manager service.
   *
   * @var \Drupal\language\ConfigurableLanguageManagerInterface
   */
  protected $languageManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\ConfigurableLanguageManagerInterface $language_manager
   *   The language_manager service.
   */
   public function __construct(ConfigurableLanguageManagerInterface $language_manager) {
     $this->languageManager = $language_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language_manager')
    );
  }

}
