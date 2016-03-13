<?php

/**
 * @file
 * Example of usage the serializer.normalizer.password_field_item service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\NullNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.password_field_item service.
   *
   * @var \Drupal\serialization\Normalizer\NullNormalizer
   */
  protected $passwordFieldItem;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\NullNormalizer $password_field_item
   *   The password_field_item service.
   */
   public function __construct(NullNormalizer $password_field_item) {
     $this->passwordFieldItem = $password_field_item;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.password_field_item')
    );
  }

}
