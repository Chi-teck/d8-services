<?php

/**
 * @file
 * Example of usage the logger.channel.quick_pages service.
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
   * The logger.channel.quick_pages service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $quickPages;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $quick_pages
   *   The quick_pages service.
   */
   public function __construct(LoggerChannelInterface $quick_pages) {
     $this->quickPages = $quick_pages;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.quick_pages')
    );
  }

}
