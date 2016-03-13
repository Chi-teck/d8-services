<?php

/**
 * @file
 * Example of usage the language.default service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Language\LanguageDefault;

/**
 * The example.
 */
class Example {

  /**
   * The language.default service.
   *
   * @var \Drupal\Core\Language\LanguageDefault
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Language\LanguageDefault $default
   *   The default service.
   */
   public function __construct(LanguageDefault $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language.default')
    );
  }

}
