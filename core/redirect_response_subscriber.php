<?php

/**
 * @file
 * Example of usage the redirect_response_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RedirectResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The redirect_response_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RedirectResponseSubscriber
   */
  protected $redirectResponseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RedirectResponseSubscriber $redirect_response_subscriber
   *   The redirect_response_subscriber service.
   */
   public function __construct(RedirectResponseSubscriber $redirect_response_subscriber) {
     $this->redirectResponseSubscriber = $redirect_response_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('redirect_response_subscriber')
    );
  }

}
