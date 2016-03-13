<?php

/**
 * @file
 * Example of usage the entity_type.bundle.info service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityTypeBundleInfo;
// The service interfaces.
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_type.bundle.info service.
   *
   * @var \Drupal\Core\Entity\EntityTypeBundleInfoInterface
   */
  protected $info;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityTypeBundleInfoInterface $info
   *   The info service.
   */
   public function __construct(EntityTypeBundleInfoInterface $info) {
     $this->info = $info;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.bundle.info')
    );
  }

}
