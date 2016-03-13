<?php

/**
 * @file
 * Example of usage the access_check.csrf service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\CsrfAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.csrf service.
   *
   * @var \Drupal\Core\Access\CsrfAccessCheck
   */
  protected $csrf;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\CsrfAccessCheck $csrf
   *   The csrf service.
   */
   public function __construct(CsrfAccessCheck $csrf) {
     $this->csrf = $csrf;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.csrf')
    );
  }

}
