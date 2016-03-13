<?php

/**
 * @file
 * Example of usage the color.config_cache_invalidator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\color\EventSubscriber\ColorConfigCacheInvalidator;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The color.config_cache_invalidator service.
   *
   * @var \Drupal\color\EventSubscriber\ColorConfigCacheInvalidator
   */
  protected $configCacheInvalidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\color\EventSubscriber\ColorConfigCacheInvalidator $config_cache_invalidator
   *   The config_cache_invalidator service.
   */
   public function __construct(ColorConfigCacheInvalidator $config_cache_invalidator) {
     $this->configCacheInvalidator = $config_cache_invalidator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('color.config_cache_invalidator')
    );
  }

}
