<?php

/**
 * @file
 * Example of usage the private_key service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PrivateKey;

/**
 * The example.
 */
class Example {

  /**
   * The private_key service.
   *
   * @var \Drupal\Core\PrivateKey
   */
  protected $privateKey;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PrivateKey $private_key
   *   The private_key service.
   */
   public function __construct(PrivateKey $private_key) {
     $this->privateKey = $private_key;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('private_key')
    );
  }

}
