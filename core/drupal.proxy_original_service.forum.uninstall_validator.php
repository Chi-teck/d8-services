<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.forum.uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\forum\ForumUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.forum.uninstall_validator service.
   *
   * @var \Drupal\forum\ForumUninstallValidator
   */
  protected $uninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\forum\ForumUninstallValidator $uninstall_validator
   *   The uninstall_validator service.
   */
   public function __construct(ForumUninstallValidator $uninstall_validator) {
     $this->uninstallValidator = $uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.forum.uninstall_validator')
    );
  }

}
