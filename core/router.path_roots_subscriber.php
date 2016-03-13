<?php

/**
 * @file
 * Example of usage the router.path_roots_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\PathRootsSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.path_roots_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\PathRootsSubscriber
   */
  protected $pathRootsSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\PathRootsSubscriber $path_roots_subscriber
   *   The path_roots_subscriber service.
   */
   public function __construct(PathRootsSubscriber $path_roots_subscriber) {
     $this->pathRootsSubscriber = $path_roots_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.path_roots_subscriber')
    );
  }

}
