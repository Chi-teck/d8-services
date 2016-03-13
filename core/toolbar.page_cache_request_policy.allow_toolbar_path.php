<?php

/**
 * @file
 * Example of usage the toolbar.page_cache_request_policy.allow_toolbar_path service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\toolbar\PageCache\AllowToolbarPath;
// The service interfaces.
use Drupal\Core\PageCache\RequestPolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The toolbar.page_cache_request_policy.allow_toolbar_path service.
   *
   * @var \Drupal\toolbar\PageCache\AllowToolbarPath
   */
  protected $allowToolbarPath;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\toolbar\PageCache\AllowToolbarPath $allow_toolbar_path
   *   The allow_toolbar_path service.
   */
   public function __construct(AllowToolbarPath $allow_toolbar_path) {
     $this->allowToolbarPath = $allow_toolbar_path;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('toolbar.page_cache_request_policy.allow_toolbar_path')
    );
  }

}
