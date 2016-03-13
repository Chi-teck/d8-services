<?php

/**
 * @file
 * Example of usage the serializer.normalizer.safe_string service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\MarkupNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.safe_string service.
   *
   * @var \Drupal\serialization\Normalizer\MarkupNormalizer
   */
  protected $safeString;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\MarkupNormalizer $safe_string
   *   The safe_string service.
   */
   public function __construct(MarkupNormalizer $safe_string) {
     $this->safeString = $safe_string;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.safe_string')
    );
  }

}
