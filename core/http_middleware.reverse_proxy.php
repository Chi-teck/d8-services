<?php

/**
 * @file
 * Example of usage the http_middleware.reverse_proxy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StackMiddleware\ReverseProxyMiddleware;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The http_middleware.reverse_proxy service.
   *
   * @var \Drupal\Core\StackMiddleware\ReverseProxyMiddleware
   */
  protected $reverseProxy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StackMiddleware\ReverseProxyMiddleware $reverse_proxy
   *   The reverse_proxy service.
   */
   public function __construct(ReverseProxyMiddleware $reverse_proxy) {
     $this->reverseProxy = $reverse_proxy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_middleware.reverse_proxy')
    );
  }

}
