<?php

/**
 * @file
 * Example of usage the page_cache_kill_switch service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PageCache\ResponsePolicy\KillSwitch;
// The service interfaces.
use Drupal\Core\PageCache\ResponsePolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The page_cache_kill_switch service.
   *
   * @var \Drupal\Core\PageCache\ResponsePolicy\KillSwitch
   */
  protected $pageCacheKillSwitch;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PageCache\ResponsePolicy\KillSwitch $page_cache_kill_switch
   *   The page_cache_kill_switch service.
   */
   public function __construct(KillSwitch $page_cache_kill_switch) {
     $this->pageCacheKillSwitch = $page_cache_kill_switch;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('page_cache_kill_switch')
    );
  }

}
