<?php

/**
 * @file
 * Example of usage the session_handler.storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\SessionHandler;
// The service interfaces.
use SessionHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The session_handler.storage service.
   *
   * @var \Drupal\Core\Session\SessionHandler
   */
  protected $storage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\SessionHandler $storage
   *   The storage service.
   */
   public function __construct(SessionHandler $storage) {
     $this->storage = $storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('session_handler.storage')
    );
  }

}
