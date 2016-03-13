<?php

/**
 * @file
 * Example of usage the serializer.normalizer.entity_reference_field_item service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\EntityReferenceFieldItemNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.entity_reference_field_item service.
   *
   * @var \Drupal\serialization\Normalizer\EntityReferenceFieldItemNormalizer
   */
  protected $entityReferenceFieldItem;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\EntityReferenceFieldItemNormalizer $entity_reference_field_item
   *   The entity_reference_field_item service.
   */
   public function __construct(EntityReferenceFieldItemNormalizer $entity_reference_field_item) {
     $this->entityReferenceFieldItem = $entity_reference_field_item;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.entity_reference_field_item')
    );
  }

}
