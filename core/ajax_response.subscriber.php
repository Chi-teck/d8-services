<?php

/**
 * @file
 * Example of usage the ajax_response.subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\AjaxResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The ajax_response.subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\AjaxResponseSubscriber
   */
  protected $subscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\AjaxResponseSubscriber $subscriber
   *   The subscriber service.
   */
   public function __construct(AjaxResponseSubscriber $subscriber) {
     $this->subscriber = $subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ajax_response.subscriber')
    );
  }

}
