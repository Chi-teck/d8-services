<?php

/**
 * @file
 * Example of usage the accept_negotiation_406 service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\AcceptNegotiation406;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The accept_negotiation_406 service.
   *
   * @var \Drupal\Core\EventSubscriber\AcceptNegotiation406
   */
  protected $acceptNegotiation406;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\AcceptNegotiation406 $accept_negotiation_406
   *   The accept_negotiation_406 service.
   */
   public function __construct(AcceptNegotiation406 $accept_negotiation_406) {
     $this->acceptNegotiation406 = $accept_negotiation_406;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('accept_negotiation_406')
    );
  }

}
