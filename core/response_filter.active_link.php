<?php

/**
 * @file
 * Example of usage the response_filter.active_link service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ActiveLinkResponseFilter;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The response_filter.active_link service.
   *
   * @var \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter
   */
  protected $activeLink;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter $active_link
   *   The active_link service.
   */
   public function __construct(ActiveLinkResponseFilter $active_link) {
     $this->activeLink = $active_link;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('response_filter.active_link')
    );
  }

}
