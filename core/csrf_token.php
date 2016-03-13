<?php

/**
 * @file
 * Example of usage the csrf_token service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\CsrfTokenGenerator;

/**
 * The example.
 */
class Example {

  /**
   * The csrf_token service.
   *
   * @var \Drupal\Core\Access\CsrfTokenGenerator
   */
  protected $csrfToken;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\CsrfTokenGenerator $csrf_token
   *   The csrf_token service.
   */
   public function __construct(CsrfTokenGenerator $csrf_token) {
     $this->csrfToken = $csrf_token;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('csrf_token')
    );
  }

}
