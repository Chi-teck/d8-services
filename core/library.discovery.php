<?php

/**
 * @file
 * Example of usage the library.discovery service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\LibraryDiscovery;
// The service interfaces.
use Drupal\Core\Asset\LibraryDiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The library.discovery service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryInterface
   */
  protected $discovery;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryInterface $discovery
   *   The discovery service.
   */
   public function __construct(LibraryDiscoveryInterface $discovery) {
     $this->discovery = $discovery;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('library.discovery')
    );
  }

}
