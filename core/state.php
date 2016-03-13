<?php

/**
 * @file
 * Example of usage the state service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\State\State;
// The service interfaces.
use Drupal\Core\State\StateInterface;

/**
 * The example.
 */
class Example {

  /**
   * The state service.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state service.
   */
   public function __construct(StateInterface $state) {
     $this->state = $state;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('state')
    );
  }

}
