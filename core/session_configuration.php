<?php

/**
 * @file
 * Example of usage the session_configuration service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\SessionConfiguration;
// The service interfaces.
use Drupal\Core\Session\SessionConfigurationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The session_configuration service.
   *
   * @var \Drupal\Core\Session\SessionConfigurationInterface
   */
  protected $sessionConfiguration;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\SessionConfigurationInterface $session_configuration
   *   The session_configuration service.
   */
   public function __construct(SessionConfigurationInterface $session_configuration) {
     $this->sessionConfiguration = $session_configuration;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('session_configuration')
    );
  }

}
