<?php

/**
 * @file
 * Example of usage the ban.middleware service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\ban\BanMiddleware;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The ban.middleware service.
   *
   * @var \Drupal\ban\BanMiddleware
   */
  protected $middleware;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\ban\BanMiddleware $middleware
   *   The middleware service.
   */
   public function __construct(BanMiddleware $middleware) {
     $this->middleware = $middleware;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ban.middleware')
    );
  }

}
