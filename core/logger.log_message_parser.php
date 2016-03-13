<?php

/**
 * @file
 * Example of usage the logger.log_message_parser service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Logger\LogMessageParser;
// The service interfaces.
use Drupal\Core\Logger\LogMessageParserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.log_message_parser service.
   *
   * @var \Drupal\Core\Logger\LogMessageParserInterface
   */
  protected $logMessageParser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LogMessageParserInterface $log_message_parser
   *   The log_message_parser service.
   */
   public function __construct(LogMessageParserInterface $log_message_parser) {
     $this->logMessageParser = $log_message_parser;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.log_message_parser')
    );
  }

}
