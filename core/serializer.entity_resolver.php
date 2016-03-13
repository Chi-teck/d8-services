<?php

/**
 * @file
 * Example of usage the serializer.entity_resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\serialization\EntityResolver\ChainEntityResolver;
// The service interfaces.
use Drupal\serialization\EntityResolver\ChainEntityResolverInterface;
use Drupal\serialization\EntityResolver\EntityResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serializer.entity_resolver service.
   *
   * @var \Drupal\serialization\EntityResolver\ChainEntityResolverInterface
   */
  protected $entityResolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\serialization\EntityResolver\ChainEntityResolverInterface $entity_resolver
   *   The entity_resolver service.
   */
   public function __construct(ChainEntityResolverInterface $entity_resolver) {
     $this->entityResolver = $entity_resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serializer.entity_resolver')
    );
  }

}
