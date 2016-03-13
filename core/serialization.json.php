<?php

/**
 * @file
 * Example of usage the serialization.json service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\Serialization\Json;
// The service interfaces.
use Drupal\Component\Serialization\SerializationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serialization.json service.
   *
   * @var \Drupal\Component\Serialization\Json
   */
  protected $json;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Serialization\Json $json
   *   The json service.
   */
   public function __construct(Json $json) {
     $this->json = $json;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serialization.json')
    );
  }

}
