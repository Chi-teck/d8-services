<?php

/**
 * @file
 * Example of usage the paramconverter_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ParamConverterSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ParamConverterSubscriber
   */
  protected $paramconverterSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ParamConverterSubscriber $paramconverter_subscriber
   *   The paramconverter_subscriber service.
   */
   public function __construct(ParamConverterSubscriber $paramconverter_subscriber) {
     $this->paramconverterSubscriber = $paramconverter_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter_subscriber')
    );
  }

}
