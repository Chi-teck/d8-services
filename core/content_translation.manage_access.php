<?php

/**
 * @file
 * Example of usage the content_translation.manage_access service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\Access\ContentTranslationManageAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.manage_access service.
   *
   * @var \Drupal\content_translation\Access\ContentTranslationManageAccessCheck
   */
  protected $manageAccess;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\Access\ContentTranslationManageAccessCheck $manage_access
   *   The manage_access service.
   */
   public function __construct(ContentTranslationManageAccessCheck $manage_access) {
     $this->manageAccess = $manage_access;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.manage_access')
    );
  }

}
