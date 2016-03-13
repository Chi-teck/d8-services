<?php

/**
 * @file
 * Example of usage the library.discovery.collector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\LibraryDiscoveryCollector;
// The service interfaces.
use Drupal\Core\DestructableInterface;
use Drupal\Core\Cache\CacheCollectorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The library.discovery.collector service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryCollector
   */
  protected $collector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryCollector $collector
   *   The collector service.
   */
   public function __construct(LibraryDiscoveryCollector $collector) {
     $this->collector = $collector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('library.discovery.collector')
    );
  }

}
