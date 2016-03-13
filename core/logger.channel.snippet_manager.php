<?php

/**
 * @file
 * Example of usage the logger.channel.snippet_manager service.
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
   * The logger.channel.snippet_manager service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $snippetManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $snippet_manager
   *   The snippet_manager service.
   */
   public function __construct(LoggerChannelInterface $snippet_manager) {
     $this->snippetManager = $snippet_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.snippet_manager')
    );
  }

}
