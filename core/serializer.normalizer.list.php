<?php

/**
 * @file
 * Example of usage the serializer.normalizer.list service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\ListNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.list service.
   *
   * @var \Drupal\serialization\Normalizer\ListNormalizer
   */
  protected $list;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\ListNormalizer $list
   *   The list service.
   */
   public function __construct(ListNormalizer $list) {
     $this->list = $list;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.list')
    );
  }

}
