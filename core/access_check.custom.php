<?php

/**
 * @file
 * Example of usage the access_check.custom service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\CustomAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.custom service.
   *
   * @var \Drupal\Core\Access\CustomAccessCheck
   */
  protected $custom;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\CustomAccessCheck $custom
   *   The custom service.
   */
   public function __construct(CustomAccessCheck $custom) {
     $this->custom = $custom;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.custom')
    );
  }

}
