<?php

/**
 * @file
 * Example of usage the http_middleware.negotiation service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StackMiddleware\NegotiationMiddleware;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The http_middleware.negotiation service.
   *
   * @var \Drupal\Core\StackMiddleware\NegotiationMiddleware
   */
  protected $negotiation;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StackMiddleware\NegotiationMiddleware $negotiation
   *   The negotiation service.
   */
   public function __construct(NegotiationMiddleware $negotiation) {
     $this->negotiation = $negotiation;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_middleware.negotiation')
    );
  }

}
