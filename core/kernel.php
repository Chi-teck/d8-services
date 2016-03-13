<?php

/**
 * @file
 * Example of usage the kernel service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\DrupalKernel;
// The service interfaces.
use Drupal\Core\DrupalKernelInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;

/**
 * The example.
 */
class Example {

  /**
   * The kernel service.
   *
   * @var \Drupal\Core\DrupalKernelInterface
   */
  protected $kernel;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\DrupalKernelInterface $kernel
   *   The kernel service.
   */
   public function __construct(DrupalKernelInterface $kernel) {
     $this->kernel = $kernel;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('kernel')
    );
  }

}
