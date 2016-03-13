<?php

/**
 * @file
 * Example of usage the exception.custom_page_json service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ExceptionJsonSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.custom_page_json service.
   *
   * @var \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber
   */
  protected $customPageJson;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber $custom_page_json
   *   The custom_page_json service.
   */
   public function __construct(ExceptionJsonSubscriber $custom_page_json) {
     $this->customPageJson = $custom_page_json;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.custom_page_json')
    );
  }

}
