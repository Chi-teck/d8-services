<?php

/**
 * @file
 * Example of usage the logger.channel.cron service.
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
   * The logger.channel.cron service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $cron;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $cron
   *   The cron service.
   */
   public function __construct(LoggerChannelInterface $cron) {
     $this->cron = $cron;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.cron')
    );
  }

}
