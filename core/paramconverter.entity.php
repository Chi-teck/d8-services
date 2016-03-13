<?php

/**
 * @file
 * Example of usage the paramconverter.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ParamConverter\EntityConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter.entity service.
   *
   * @var \Drupal\Core\ParamConverter\EntityConverter
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ParamConverter\EntityConverter $entity
   *   The entity service.
   */
   public function __construct(EntityConverter $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter.entity')
    );
  }

}
