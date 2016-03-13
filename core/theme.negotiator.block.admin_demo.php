<?php

/**
 * @file
 * Example of usage the theme.negotiator.block.admin_demo service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\block\Theme\AdminDemoNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.block.admin_demo service.
   *
   * @var \Drupal\block\Theme\AdminDemoNegotiator
   */
  protected $adminDemo;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\block\Theme\AdminDemoNegotiator $admin_demo
   *   The admin_demo service.
   */
   public function __construct(AdminDemoNegotiator $admin_demo) {
     $this->adminDemo = $admin_demo;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.block.admin_demo')
    );
  }

}
