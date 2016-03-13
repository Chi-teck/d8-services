<?php

/**
 * @file
 * Example of usage the system.config_cache_tag service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\EventSubscriber\ConfigCacheTag;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The system.config_cache_tag service.
   *
   * @var \Drupal\system\EventSubscriber\ConfigCacheTag
   */
  protected $configCacheTag;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\EventSubscriber\ConfigCacheTag $config_cache_tag
   *   The config_cache_tag service.
   */
   public function __construct(ConfigCacheTag $config_cache_tag) {
     $this->configCacheTag = $config_cache_tag;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('system.config_cache_tag')
    );
  }

}
