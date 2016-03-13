<?php

/**
 * @file
 * Example of usage the forum.breadcrumb.node service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\forum\Breadcrumb\ForumNodeBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The forum.breadcrumb.node service.
   *
   * @var \Drupal\forum\Breadcrumb\ForumNodeBreadcrumbBuilder
   */
  protected $node;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\forum\Breadcrumb\ForumNodeBreadcrumbBuilder $node
   *   The node service.
   */
   public function __construct(ForumNodeBreadcrumbBuilder $node) {
     $this->node = $node;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('forum.breadcrumb.node')
    );
  }

}
