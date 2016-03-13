<?php

/**
 * @file
 * Example of usage the http_middleware.session service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StackMiddleware\Session;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The http_middleware.session service.
   *
   * @var \Drupal\Core\StackMiddleware\Session
   */
  protected $session;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StackMiddleware\Session $session
   *   The session service.
   */
   public function __construct(Session $session) {
     $this->session = $session;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_middleware.session')
    );
  }

}
