<?php

/**
 * @file
 * Example of usage the cache_context.theme service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\ThemeCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.theme service.
   *
   * @var \Drupal\Core\Cache\Context\ThemeCacheContext
   */
  protected $theme;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\ThemeCacheContext $theme
   *   The theme service.
   */
   public function __construct(ThemeCacheContext $theme) {
     $this->theme = $theme;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.theme')
    );
  }

}
