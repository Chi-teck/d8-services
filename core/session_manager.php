<?php

/**
 * @file
 * Example of usage the session_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\SessionManager;
// The service interfaces.
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
use Drupal\Core\Session\SessionManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The session_manager service.
   *
   * @var \Drupal\Core\Session\SessionManagerInterface
   */
  protected $sessionManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\SessionManagerInterface $session_manager
   *   The session_manager service.
   */
   public function __construct(SessionManagerInterface $session_manager) {
     $this->sessionManager = $session_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('session_manager')
    );
  }

}
