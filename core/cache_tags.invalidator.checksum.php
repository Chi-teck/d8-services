<?php

/**
 * @file
 * Example of usage the cache_tags.invalidator.checksum service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\DatabaseCacheTagsChecksum;
// The service interfaces.
use Drupal\Core\Cache\CacheTagsChecksumInterface;
use Drupal\Core\Cache\CacheTagsInvalidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_tags.invalidator.checksum service.
   *
   * @var \Drupal\Core\Cache\DatabaseCacheTagsChecksum
   */
  protected $checksum;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseCacheTagsChecksum $checksum
   *   The checksum service.
   */
   public function __construct(DatabaseCacheTagsChecksum $checksum) {
     $this->checksum = $checksum;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_tags.invalidator.checksum')
    );
  }

}
