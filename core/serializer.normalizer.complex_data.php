<?php

/**
 * @file
 * Example of usage the serializer.normalizer.complex_data service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\ComplexDataNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.complex_data service.
   *
   * @var \Drupal\serialization\Normalizer\ComplexDataNormalizer
   */
  protected $complexData;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\ComplexDataNormalizer $complex_data
   *   The complex_data service.
   */
   public function __construct(ComplexDataNormalizer $complex_data) {
     $this->complexData = $complex_data;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.complex_data')
    );
  }

}
