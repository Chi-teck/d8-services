<?php

/**
 * @file
 * Example of usage the exception.default service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\DefaultExceptionSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.default service.
   *
   * @var \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber $default
   *   The default service.
   */
   public function __construct(DefaultExceptionSubscriber $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.default')
    );
  }

}
