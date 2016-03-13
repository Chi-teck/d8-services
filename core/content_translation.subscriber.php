<?php

/**
 * @file
 * Example of usage the content_translation.subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\Routing\ContentTranslationRouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.subscriber service.
   *
   * @var \Drupal\content_translation\Routing\ContentTranslationRouteSubscriber
   */
  protected $subscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\Routing\ContentTranslationRouteSubscriber $subscriber
   *   The subscriber service.
   */
   public function __construct(ContentTranslationRouteSubscriber $subscriber) {
     $this->subscriber = $subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.subscriber')
    );
  }

}
