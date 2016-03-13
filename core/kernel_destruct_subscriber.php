<?php

/**
 * @file
 * Example of usage the kernel_destruct_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\KernelDestructionSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The kernel_destruct_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\KernelDestructionSubscriber
   */
  protected $kernelDestructSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\KernelDestructionSubscriber $kernel_destruct_subscriber
   *   The kernel_destruct_subscriber service.
   */
   public function __construct(KernelDestructionSubscriber $kernel_destruct_subscriber) {
     $this->kernelDestructSubscriber = $kernel_destruct_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('kernel_destruct_subscriber')
    );
  }

}
