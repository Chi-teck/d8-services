<?php

/**
 * @file
 * Example of usage the access_check.tracker.view_own service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\tracker\Access\ViewOwnTrackerAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.tracker.view_own service.
   *
   * @var \Drupal\tracker\Access\ViewOwnTrackerAccessCheck
   */
  protected $viewOwn;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\tracker\Access\ViewOwnTrackerAccessCheck $view_own
   *   The view_own service.
   */
   public function __construct(ViewOwnTrackerAccessCheck $view_own) {
     $this->viewOwn = $view_own;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.tracker.view_own')
    );
  }

}
