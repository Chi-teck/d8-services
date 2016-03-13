<?php

/**
 * @file
 * Example of usage the serializer.normalizer.entity_reference_item.hal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\hal\Normalizer\EntityReferenceItemNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Drupal\serialization\EntityResolver\UuidReferenceInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.entity_reference_item.hal service.
   *
   * @var \Drupal\hal\Normalizer\EntityReferenceItemNormalizer
   */
  protected $hal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\hal\Normalizer\EntityReferenceItemNormalizer $hal
   *   The hal service.
   */
   public function __construct(EntityReferenceItemNormalizer $hal) {
     $this->hal = $hal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.entity_reference_item.hal')
    );
  }

}
