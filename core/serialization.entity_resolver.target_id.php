<?php

/**
 * @file
 * Example of usage the serialization.entity_resolver.target_id service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\EntityResolver\TargetIdResolver;
// The service interfaces.
use Drupal\serialization\EntityResolver\EntityResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serialization.entity_resolver.target_id service.
   *
   * @var \Drupal\serialization\EntityResolver\TargetIdResolver
   */
  protected $targetId;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\EntityResolver\TargetIdResolver $target_id
   *   The target_id service.
   */
   public function __construct(TargetIdResolver $target_id) {
     $this->targetId = $target_id;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serialization.entity_resolver.target_id')
    );
  }

}
