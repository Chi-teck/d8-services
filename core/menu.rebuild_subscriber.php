<?php

/**
 * @file
 * Example of usage the menu.rebuild_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The menu.rebuild_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber
   */
  protected $rebuildSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber $rebuild_subscriber
   *   The rebuild_subscriber service.
   */
   public function __construct(MenuRouterRebuildSubscriber $rebuild_subscriber) {
     $this->rebuildSubscriber = $rebuild_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('menu.rebuild_subscriber')
    );
  }

}
