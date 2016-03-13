<?php

/**
 * @file
 * Example of usage the session_handler.write_safe service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\WriteSafeSessionHandler;
// The service interfaces.
use SessionHandlerInterface;
use Drupal\Core\Session\WriteSafeSessionHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The session_handler.write_safe service.
   *
   * @var \Drupal\Core\Session\WriteSafeSessionHandlerInterface
   */
  protected $writeSafe;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\WriteSafeSessionHandlerInterface $write_safe
   *   The write_safe service.
   */
   public function __construct(WriteSafeSessionHandlerInterface $write_safe) {
     $this->writeSafe = $write_safe;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('session_handler.write_safe')
    );
  }

}
