<?php

/**
 * @file
 * Example of usage the cache_context.languages service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\LanguagesCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.languages service.
   *
   * @var \Drupal\Core\Cache\Context\LanguagesCacheContext
   */
  protected $languages;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\LanguagesCacheContext $languages
   *   The languages service.
   */
   public function __construct(LanguagesCacheContext $languages) {
     $this->languages = $languages;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.languages')
    );
  }

}
