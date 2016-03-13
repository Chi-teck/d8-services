<?php

/**
 * @file
 * Example of usage the exception.logger service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.logger service.
   *
   * @var \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber
   */
  protected $logger;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber $logger
   *   The logger service.
   */
   public function __construct(ExceptionLoggingSubscriber $logger) {
     $this->logger = $logger;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.logger')
    );
  }

}
