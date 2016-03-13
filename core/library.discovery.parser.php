<?php

/**
 * @file
 * Example of usage the library.discovery.parser service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\LibraryDiscoveryParser;

/**
 * The example.
 */
class Example {

  /**
   * The library.discovery.parser service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryParser
   */
  protected $parser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryParser $parser
   *   The parser service.
   */
   public function __construct(LibraryDiscoveryParser $parser) {
     $this->parser = $parser;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('library.discovery.parser')
    );
  }

}
