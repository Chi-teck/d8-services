<?php

/**
 * @file
 * Example of usage the user.private_tempstore service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\PrivateTempStoreFactory;

/**
 * The example.
 */
class Example {

  /**
   * The user.private_tempstore service.
   *
   * @var \Drupal\user\PrivateTempStoreFactory
   */
  protected $privateTempstore;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\PrivateTempStoreFactory $private_tempstore
   *   The private_tempstore service.
   */
   public function __construct(PrivateTempStoreFactory $private_tempstore) {
     $this->privateTempstore = $private_tempstore;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.private_tempstore')
    );
  }

}
