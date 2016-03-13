<?php

/**
 * @file
 * Example of usage the paramconverter.configentity_admin service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter.configentity_admin service.
   *
   * @var \Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter
   */
  protected $configentityAdmin;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter $configentity_admin
   *   The configentity_admin service.
   */
   public function __construct(AdminPathConfigEntityConverter $configentity_admin) {
     $this->configentityAdmin = $configentity_admin;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter.configentity_admin')
    );
  }

}
