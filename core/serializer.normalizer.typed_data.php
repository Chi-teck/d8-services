<?php

/**
 * @file
 * Example of usage the serializer.normalizer.typed_data service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\TypedDataNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.typed_data service.
   *
   * @var \Drupal\serialization\Normalizer\TypedDataNormalizer
   */
  protected $typedData;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\TypedDataNormalizer $typed_data
   *   The typed_data service.
   */
   public function __construct(TypedDataNormalizer $typed_data) {
     $this->typedData = $typed_data;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.typed_data')
    );
  }

}
