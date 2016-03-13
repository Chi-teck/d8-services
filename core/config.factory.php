<?php

/**
 * @file
 * Example of usage the config.factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\ConfigFactory;
// The service interfaces.
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $factory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $factory
   *   The factory service.
   */
   public function __construct(ConfigFactoryInterface $factory) {
     $this->factory = $factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

}
