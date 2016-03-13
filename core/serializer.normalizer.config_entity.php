<?php

/**
 * @file
 * Example of usage the serializer.normalizer.config_entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\Normalizer\ConfigEntityNormalizer;
// The service interfaces.
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.normalizer.config_entity service.
   *
   * @var \Drupal\serialization\Normalizer\ConfigEntityNormalizer
   */
  protected $configEntity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\Normalizer\ConfigEntityNormalizer $config_entity
   *   The config_entity service.
   */
   public function __construct(ConfigEntityNormalizer $config_entity) {
     $this->configEntity = $config_entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.normalizer.config_entity')
    );
  }

}
