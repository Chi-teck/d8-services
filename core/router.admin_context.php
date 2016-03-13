<?php

/**
 * @file
 * Example of usage the router.admin_context service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\AdminContext;

/**
 * The example.
 */
class Example {

  /**
   * The router.admin_context service.
   *
   * @var \Drupal\Core\Routing\AdminContext
   */
  protected $adminContext;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\AdminContext $admin_context
   *   The admin_context service.
   */
   public function __construct(AdminContext $admin_context) {
     $this->adminContext = $admin_context;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.admin_context')
    );
  }

}
