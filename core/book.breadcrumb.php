<?php

/**
 * @file
 * Example of usage the book.breadcrumb service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The book.breadcrumb service.
   *
   * @var \Drupal\book\BookBreadcrumbBuilder
   */
  protected $breadcrumb;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookBreadcrumbBuilder $breadcrumb
   *   The breadcrumb service.
   */
   public function __construct(BookBreadcrumbBuilder $breadcrumb) {
     $this->breadcrumb = $breadcrumb;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('book.breadcrumb')
    );
  }

}
