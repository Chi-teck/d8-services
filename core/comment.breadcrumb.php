<?php

/**
 * @file
 * Example of usage the comment.breadcrumb service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\comment\CommentBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The comment.breadcrumb service.
   *
   * @var \Drupal\comment\CommentBreadcrumbBuilder
   */
  protected $breadcrumb;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\comment\CommentBreadcrumbBuilder $breadcrumb
   *   The breadcrumb service.
   */
   public function __construct(CommentBreadcrumbBuilder $breadcrumb) {
     $this->breadcrumb = $breadcrumb;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('comment.breadcrumb')
    );
  }

}
