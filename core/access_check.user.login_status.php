<?php

/**
 * @file
 * Example of usage the access_check.user.login_status service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Access\LoginStatusCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.user.login_status service.
   *
   * @var \Drupal\user\Access\LoginStatusCheck
   */
  protected $loginStatus;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Access\LoginStatusCheck $login_status
   *   The login_status service.
   */
   public function __construct(LoginStatusCheck $login_status) {
     $this->loginStatus = $login_status;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.user.login_status')
    );
  }

}
