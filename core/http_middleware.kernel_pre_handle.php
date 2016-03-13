<?php

/**
 * @file
 * Example of usage the http_middleware.kernel_pre_handle service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StackMiddleware\KernelPreHandle;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The http_middleware.kernel_pre_handle service.
   *
   * @var \Drupal\Core\StackMiddleware\KernelPreHandle
   */
  protected $kernelPreHandle;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StackMiddleware\KernelPreHandle $kernel_pre_handle
   *   The kernel_pre_handle service.
   */
   public function __construct(KernelPreHandle $kernel_pre_handle) {
     $this->kernelPreHandle = $kernel_pre_handle;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_middleware.kernel_pre_handle')
    );
  }

}
