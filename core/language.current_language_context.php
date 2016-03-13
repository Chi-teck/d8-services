<?php

/**
 * @file
 * Example of usage the language.current_language_context service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Language\ContextProvider\CurrentLanguageContext;
// The service interfaces.
use Drupal\Core\Plugin\Context\ContextProviderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language.current_language_context service.
   *
   * @var \Drupal\Core\Language\ContextProvider\CurrentLanguageContext
   */
  protected $currentLanguageContext;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Language\ContextProvider\CurrentLanguageContext $current_language_context
   *   The current_language_context service.
   */
   public function __construct(CurrentLanguageContext $current_language_context) {
     $this->currentLanguageContext = $current_language_context;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language.current_language_context')
    );
  }

}
