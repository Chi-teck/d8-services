<?php

/**
 * @file
 * Example of usage the current_user service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\AccountProxy;
// The service interfaces.
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * The example.
 */
class Example {

  /**
   * The current_user service.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\AccountProxyInterface $current_user
   *   The current_user service.
   */
   public function __construct(AccountProxyInterface $current_user) {
     $this->currentUser = $current_user;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_user')
    );
  }

}
