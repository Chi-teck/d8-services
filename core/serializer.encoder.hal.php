<?php

/**
 * @file
 * Example of usage the serializer.encoder.hal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\hal\Encoder\JsonEncoder;
// The service interfaces.
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.encoder.hal service.
   *
   * @var \Drupal\hal\Encoder\JsonEncoder
   */
  protected $hal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\hal\Encoder\JsonEncoder $hal
   *   The hal service.
   */
   public function __construct(JsonEncoder $hal) {
     $this->hal = $hal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.encoder.hal')
    );
  }

}
