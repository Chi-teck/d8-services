<?php

/**
 * @file
 * Example of usage the access_check.default service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\DefaultAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.default service.
   *
   * @var \Drupal\Core\Access\DefaultAccessCheck
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\DefaultAccessCheck $default
   *   The default service.
   */
   public function __construct(DefaultAccessCheck $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.default')
    );
  }

}
