<?php

/**
 * @file
 * Example of usage the logger.syslog service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\syslog\Logger\SysLog;
// The service interfaces.
use Psr\Log\LoggerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.syslog service.
   *
   * @var \Drupal\syslog\Logger\SysLog
   */
  protected $syslog;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\syslog\Logger\SysLog $syslog
   *   The syslog service.
   */
   public function __construct(SysLog $syslog) {
     $this->syslog = $syslog;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.syslog')
    );
  }

}
