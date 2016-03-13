<?php

/**
 * @file
 * Example of usage the user.data service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\UserData;
// The service interfaces.
use Drupal\user\UserDataInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user.data service.
   *
   * @var \Drupal\user\UserDataInterface
   */
  protected $data;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\UserDataInterface $data
   *   The data service.
   */
   public function __construct(UserDataInterface $data) {
     $this->data = $data;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.data')
    );
  }

}
