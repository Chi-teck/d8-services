<?php

/**
 * @file
 * Example of usage the keyvalue.expirable service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\KeyValueStore\KeyValueExpirableFactory;
// The service interfaces.
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
use Drupal\Core\KeyValueStore\KeyValueExpirableFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The keyvalue.expirable service.
   *
   * @var \Drupal\Core\KeyValueStore\KeyValueExpirableFactoryInterface
   */
  protected $expirable;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\KeyValueStore\KeyValueExpirableFactoryInterface $expirable
   *   The expirable service.
   */
   public function __construct(KeyValueExpirableFactoryInterface $expirable) {
     $this->expirable = $expirable;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('keyvalue.expirable')
    );
  }

}
