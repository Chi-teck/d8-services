<?php

/**
 * @file
 * Example of usage the serialization.yaml service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\Serialization\Yaml;
// The service interfaces.
use Drupal\Component\Serialization\SerializationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serialization.yaml service.
   *
   * @var \Drupal\Component\Serialization\Yaml
   */
  protected $yaml;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Serialization\Yaml $yaml
   *   The yaml service.
   */
   public function __construct(Yaml $yaml) {
     $this->yaml = $yaml;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serialization.yaml')
    );
  }

}
