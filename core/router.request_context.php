<?php

/**
 * @file
 * Example of usage the router.request_context service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RequestContext;

/**
 * The example.
 */
class Example {

  /**
   * The router.request_context service.
   *
   * @var \Drupal\Core\Routing\RequestContext
   */
  protected $requestContext;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RequestContext $request_context
   *   The request_context service.
   */
   public function __construct(RequestContext $request_context) {
     $this->requestContext = $request_context;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.request_context')
    );
  }

}
