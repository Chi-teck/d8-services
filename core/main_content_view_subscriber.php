<?php

/**
 * @file
 * Example of usage the main_content_view_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\MainContentViewSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The main_content_view_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\MainContentViewSubscriber
   */
  protected $mainContentViewSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\MainContentViewSubscriber $main_content_view_subscriber
   *   The main_content_view_subscriber service.
   */
   public function __construct(MainContentViewSubscriber $main_content_view_subscriber) {
     $this->mainContentViewSubscriber = $main_content_view_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('main_content_view_subscriber')
    );
  }

}
