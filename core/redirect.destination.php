<?php

/**
 * @file
 * Example of usage the redirect.destination service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RedirectDestination;
// The service interfaces.
use Drupal\Core\Routing\RedirectDestinationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The redirect.destination service.
   *
   * @var \Drupal\Core\Routing\RedirectDestinationInterface
   */
  protected $destination;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RedirectDestinationInterface $destination
   *   The destination service.
   */
   public function __construct(RedirectDestinationInterface $destination) {
     $this->destination = $destination;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('redirect.destination')
    );
  }

}
