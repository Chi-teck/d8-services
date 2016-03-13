<?php

/**
 * @file
 * Example of usage the serializer.encoder.json service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Encoder\JsonEncoder;
// The service interfaces.
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.encoder.json service.
   *
   * @var \Drupal\serialization\Encoder\JsonEncoder
   */
  protected $json;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Encoder\JsonEncoder $json
   *   The json service.
   */
   public function __construct(JsonEncoder $json) {
     $this->json = $json;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.encoder.json')
    );
  }

}
