<?php

/**
 * @file
 * Example of usage the language_negotiator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\LanguageNegotiator;
// The service interfaces.
use Drupal\language\LanguageNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language_negotiator service.
   *
   * @var \Drupal\language\LanguageNegotiatorInterface
   */
  protected $languageNegotiator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\LanguageNegotiatorInterface $language_negotiator
   *   The language_negotiator service.
   */
   public function __construct(LanguageNegotiatorInterface $language_negotiator) {
     $this->languageNegotiator = $language_negotiator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language_negotiator')
    );
  }

}
