<?php

/**
 * @file
 * Example of usage the cron service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Cron;
// The service interfaces.
use Drupal\Core\CronInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cron service.
   *
   * @var \Drupal\Core\ProxyClass\Cron
   */
  protected $cron;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Cron $cron
   *   The cron service.
   */
   public function __construct(Cron $cron) {
     $this->cron = $cron;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cron')
    );
  }

}
