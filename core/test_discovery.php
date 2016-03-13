<?php

/**
 * @file
 * Example of usage the test_discovery service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\simpletest\TestDiscovery;

/**
 * The example.
 */
class Example {

  /**
   * The test_discovery service.
   *
   * @var \Drupal\simpletest\TestDiscovery
   */
  protected $testDiscovery;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\simpletest\TestDiscovery $test_discovery
   *   The test_discovery service.
   */
   public function __construct(TestDiscovery $test_discovery) {
     $this->testDiscovery = $test_discovery;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('test_discovery')
    );
  }

}
