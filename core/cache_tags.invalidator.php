<?php

/**
 * @file
 * Example of usage the cache_tags.invalidator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\CacheTagsInvalidator;
// The service interfaces.
use Drupal\Core\Cache\CacheTagsInvalidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_tags.invalidator service.
   *
   * @var \Drupal\Core\Cache\CacheTagsInvalidatorInterface
   */
  protected $invalidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\CacheTagsInvalidatorInterface $invalidator
   *   The invalidator service.
   */
   public function __construct(CacheTagsInvalidatorInterface $invalidator) {
     $this->invalidator = $invalidator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_tags.invalidator')
    );
  }

}
