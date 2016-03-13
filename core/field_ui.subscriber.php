<?php

/**
 * @file
 * Example of usage the field_ui.subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\field_ui\Routing\RouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field_ui.subscriber service.
   *
   * @var \Drupal\field_ui\Routing\RouteSubscriber
   */
  protected $subscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\field_ui\Routing\RouteSubscriber $subscriber
   *   The subscriber service.
   */
   public function __construct(RouteSubscriber $subscriber) {
     $this->subscriber = $subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field_ui.subscriber')
    );
  }

}
