<?php

/**
 * @file
 * Example of usage the serializer.encoder.xml service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Encoder\XmlEncoder;
// The service interfaces.
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Encoder\DecoderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.encoder.xml service.
   *
   * @var \Drupal\serialization\Encoder\XmlEncoder
   */
  protected $xml;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Encoder\XmlEncoder $xml
   *   The xml service.
   */
   public function __construct(XmlEncoder $xml) {
     $this->xml = $xml;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.encoder.xml')
    );
  }

}
