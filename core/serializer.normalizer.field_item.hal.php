<?php

/**
 * @file
 * Example of usage the serializer.normalizer.field_item.hal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\hal\Normalizer\FieldItemNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.field_item.hal service.
   *
   * @var \Drupal\hal\Normalizer\FieldItemNormalizer
   */
  protected $hal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\hal\Normalizer\FieldItemNormalizer $hal
   *   The hal service.
   */
   public function __construct(FieldItemNormalizer $hal) {
     $this->hal = $hal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.field_item.hal')
    );
  }

}
