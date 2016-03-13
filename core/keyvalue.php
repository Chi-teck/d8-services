<?php

/**
 * @file
 * Example of usage the keyvalue service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\KeyValueStore\KeyValueFactory;
// The service interfaces.
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The keyvalue service.
   *
   * @var \Drupal\Core\KeyValueStore\KeyValueFactoryInterface
   */
  protected $keyvalue;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\KeyValueStore\KeyValueFactoryInterface $keyvalue
   *   The keyvalue service.
   */
   public function __construct(KeyValueFactoryInterface $keyvalue) {
     $this->keyvalue = $keyvalue;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('keyvalue')
    );
  }

}
