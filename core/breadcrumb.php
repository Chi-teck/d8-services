<?php

/**
 * @file
 * Example of usage the breadcrumb service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Breadcrumb\BreadcrumbManager;
// The service interfaces.
use Drupal\Core\Breadcrumb\ChainBreadcrumbBuilderInterface;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The breadcrumb service.
   *
   * @var \Drupal\Core\Breadcrumb\BreadcrumbManager
   */
  protected $breadcrumb;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Breadcrumb\BreadcrumbManager $breadcrumb
   *   The breadcrumb service.
   */
   public function __construct(BreadcrumbManager $breadcrumb) {
     $this->breadcrumb = $breadcrumb;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('breadcrumb')
    );
  }

}
