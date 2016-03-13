<?php

/**
 * @file
 * Example of usage the content_uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Entity\ContentUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_uninstall_validator service.
   *
   * @var \Drupal\Core\ProxyClass\Entity\ContentUninstallValidator
   */
  protected $contentUninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Entity\ContentUninstallValidator $content_uninstall_validator
   *   The content_uninstall_validator service.
   */
   public function __construct(ContentUninstallValidator $content_uninstall_validator) {
     $this->contentUninstallValidator = $content_uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_uninstall_validator')
    );
  }

}
