<?php

/**
 * @file
 * Example of usage the access_check.rest.csrf service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\Access\CSRFAccessCheck;
// The service interfaces.
use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.rest.csrf service.
   *
   * @var \Drupal\rest\Access\CSRFAccessCheck
   */
  protected $csrf;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\Access\CSRFAccessCheck $csrf
   *   The csrf service.
   */
   public function __construct(CSRFAccessCheck $csrf) {
     $this->csrf = $csrf;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.rest.csrf')
    );
  }

}
