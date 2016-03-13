<?php

/**
 * @file
 * Example of usage the forum.breadcrumb.listing service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\forum\Breadcrumb\ForumListingBreadcrumbBuilder;
// The service interfaces.
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The forum.breadcrumb.listing service.
   *
   * @var \Drupal\forum\Breadcrumb\ForumListingBreadcrumbBuilder
   */
  protected $listing;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\forum\Breadcrumb\ForumListingBreadcrumbBuilder $listing
   *   The listing service.
   */
   public function __construct(ForumListingBreadcrumbBuilder $listing) {
     $this->listing = $listing;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('forum.breadcrumb.listing')
    );
  }

}
