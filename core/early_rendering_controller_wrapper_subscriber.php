<?php

/**
 * @file
 * Example of usage the early_rendering_controller_wrapper_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The early_rendering_controller_wrapper_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber
   */
  protected $earlyRenderingControllerWrapperSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber $early_rendering_controller_wrapper_subscriber
   *   The early_rendering_controller_wrapper_subscriber service.
   */
   public function __construct(EarlyRenderingControllerWrapperSubscriber $early_rendering_controller_wrapper_subscriber) {
     $this->earlyRenderingControllerWrapperSubscriber = $early_rendering_controller_wrapper_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('early_rendering_controller_wrapper_subscriber')
    );
  }

}
