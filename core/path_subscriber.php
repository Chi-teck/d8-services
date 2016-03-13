<?php

/**
 * @file
 * Example of usage the path_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\PathSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\PathSubscriber
   */
  protected $pathSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\PathSubscriber $path_subscriber
   *   The path_subscriber service.
   */
   public function __construct(PathSubscriber $path_subscriber) {
     $this->pathSubscriber = $path_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_subscriber')
    );
  }

}
