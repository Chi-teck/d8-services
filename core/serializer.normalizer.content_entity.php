<?php

/**
 * @file
 * Example of usage the serializer.normalizer.content_entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\ContentEntityNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.content_entity service.
   *
   * @var \Drupal\serialization\Normalizer\ContentEntityNormalizer
   */
  protected $contentEntity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\ContentEntityNormalizer $content_entity
   *   The content_entity service.
   */
   public function __construct(ContentEntityNormalizer $content_entity) {
     $this->contentEntity = $content_entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.content_entity')
    );
  }

}
