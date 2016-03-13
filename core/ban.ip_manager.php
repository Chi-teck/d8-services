<?php

/**
 * @file
 * Example of usage the ban.ip_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\ban\BanIpManager;
// The service interfaces.
use Drupal\ban\BanIpManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The ban.ip_manager service.
   *
   * @var \Drupal\ban\BanIpManagerInterface
   */
  protected $ipManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\ban\BanIpManagerInterface $ip_manager
   *   The ip_manager service.
   */
   public function __construct(BanIpManagerInterface $ip_manager) {
     $this->ipManager = $ip_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ban.ip_manager')
    );
  }

}
