<?php

/**
 * @file
 * Example of usage the automated_cron.subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\automated_cron\EventSubscriber\AutomatedCron;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The automated_cron.subscriber service.
   *
   * @var \Drupal\automated_cron\EventSubscriber\AutomatedCron
   */
  protected $subscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\automated_cron\EventSubscriber\AutomatedCron $subscriber
   *   The subscriber service.
   */
   public function __construct(AutomatedCron $subscriber) {
     $this->subscriber = $subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('automated_cron.subscriber')
    );
  }

}
