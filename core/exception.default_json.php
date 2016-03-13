<?php

/**
 * @file
 * Example of usage the exception.default_json service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.default_json service.
   *
   * @var \Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber
   */
  protected $defaultJson;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber $default_json
   *   The default_json service.
   */
   public function __construct(ExceptionHalJsonSubscriber $default_json) {
     $this->defaultJson = $default_json;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.default_json')
    );
  }

}
