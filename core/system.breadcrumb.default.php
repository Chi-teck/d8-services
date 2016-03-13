<?php

/**
 * @file
 * Example of usage the system.breadcrumb.default service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\PathBasedBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The system.breadcrumb.default service.
   *
   * @var \Drupal\system\PathBasedBreadcrumbBuilder
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\PathBasedBreadcrumbBuilder $default
   *   The default service.
   */
   public function __construct(PathBasedBreadcrumbBuilder $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('system.breadcrumb.default')
    );
  }

}
