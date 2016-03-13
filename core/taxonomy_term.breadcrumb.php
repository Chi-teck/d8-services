<?php

/**
 * @file
 * Example of usage the taxonomy_term.breadcrumb service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\taxonomy\TermBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The taxonomy_term.breadcrumb service.
   *
   * @var \Drupal\taxonomy\TermBreadcrumbBuilder
   */
  protected $breadcrumb;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\taxonomy\TermBreadcrumbBuilder $breadcrumb
   *   The breadcrumb service.
   */
   public function __construct(TermBreadcrumbBuilder $breadcrumb) {
     $this->breadcrumb = $breadcrumb;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('taxonomy_term.breadcrumb')
    );
  }

}
