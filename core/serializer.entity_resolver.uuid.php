<?php

/**
 * @file
 * Example of usage the serializer.entity_resolver.uuid service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\EntityResolver\UuidResolver;
// The service interfaces.
use Drupal\serialization\EntityResolver\EntityResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.entity_resolver.uuid service.
   *
   * @var \Drupal\serialization\EntityResolver\UuidResolver
   */
  protected $uuid;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\EntityResolver\UuidResolver $uuid
   *   The uuid service.
   */
   public function __construct(UuidResolver $uuid) {
     $this->uuid = $uuid;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.entity_resolver.uuid')
    );
  }

}
