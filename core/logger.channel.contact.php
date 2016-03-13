<?php

/**
 * @file
 * Example of usage the logger.channel.contact service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Logger\LoggerChannel;
// The service interfaces.
use Drupal\Core\Logger\LoggerChannelInterface;
use Psr\Log\LoggerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.channel.contact service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $contact;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $contact
   *   The contact service.
   */
   public function __construct(LoggerChannelInterface $contact) {
     $this->contact = $contact;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.contact')
    );
  }

}
