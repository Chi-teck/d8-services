<?php

/**
 * @file
 * Example of usage the access_check.cron service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\Access\CronAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.cron service.
   *
   * @var \Drupal\system\Access\CronAccessCheck
   */
  protected $cron;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\Access\CronAccessCheck $cron
   *   The cron service.
   */
   public function __construct(CronAccessCheck $cron) {
     $this->cron = $cron;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.cron')
    );
  }

}
