<?php

/**
 * @file
 * Example of usage the access_check.user.register service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Access\RegisterAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.user.register service.
   *
   * @var \Drupal\user\Access\RegisterAccessCheck
   */
  protected $register;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Access\RegisterAccessCheck $register
   *   The register service.
   */
   public function __construct(RegisterAccessCheck $register) {
     $this->register = $register;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.user.register')
    );
  }

}
