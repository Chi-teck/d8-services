<?php

/**
 * @file
 * Example of usage the html_response.subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\HtmlResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The html_response.subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\HtmlResponseSubscriber
   */
  protected $subscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\HtmlResponseSubscriber $subscriber
   *   The subscriber service.
   */
   public function __construct(HtmlResponseSubscriber $subscriber) {
     $this->subscriber = $subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('html_response.subscriber')
    );
  }

}
