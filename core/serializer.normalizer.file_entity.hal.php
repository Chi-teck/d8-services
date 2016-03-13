<?php

/**
 * @file
 * Example of usage the serializer.normalizer.file_entity.hal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\hal\Normalizer\FileEntityNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.file_entity.hal service.
   *
   * @var \Drupal\hal\Normalizer\FileEntityNormalizer
   */
  protected $hal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\hal\Normalizer\FileEntityNormalizer $hal
   *   The hal service.
   */
   public function __construct(FileEntityNormalizer $hal) {
     $this->hal = $hal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.file_entity.hal')
    );
  }

}
