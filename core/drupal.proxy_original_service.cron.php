<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.cron service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cron;
// The service interfaces.
use Drupal\Core\CronInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.cron service.
   *
   * @var \Drupal\Core\CronInterface
   */
  protected $cron;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\CronInterface $cron
   *   The cron service.
   */
   public function __construct(CronInterface $cron) {
     $this->cron = $cron;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.cron')
    );
  }

}
