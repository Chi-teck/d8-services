<?php

/**
 * @file
 * Example of usage the serializer.normalizer.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\EntityNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.entity service.
   *
   * @var \Drupal\serialization\Normalizer\EntityNormalizer
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\EntityNormalizer $entity
   *   The entity service.
   */
   public function __construct(EntityNormalizer $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.entity')
    );
  }

}
