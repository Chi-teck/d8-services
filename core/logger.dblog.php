<?php

/**
 * @file
 * Example of usage the logger.dblog service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\dblog\Logger\DbLog;
// The service interfaces.
use Psr\Log\LoggerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.dblog service.
   *
   * @var \Drupal\dblog\Logger\DbLog
   */
  protected $dblog;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\dblog\Logger\DbLog $dblog
   *   The dblog service.
   */
   public function __construct(DbLog $dblog) {
     $this->dblog = $dblog;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.dblog')
    );
  }

}
