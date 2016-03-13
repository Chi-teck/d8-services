<?php

/**
 * @file
 * Example of usage the http_client_factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Http\ClientFactory;

/**
 * The example.
 */
class Example {

  /**
   * The http_client_factory service.
   *
   * @var \Drupal\Core\Http\ClientFactory
   */
  protected $httpClientFactory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Http\ClientFactory $http_client_factory
   *   The http_client_factory service.
   */
   public function __construct(ClientFactory $http_client_factory) {
     $this->httpClientFactory = $http_client_factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_client_factory')
    );
  }

}
