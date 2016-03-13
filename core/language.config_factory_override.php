<?php

/**
 * @file
 * Example of usage the language.config_factory_override service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\Config\LanguageConfigFactoryOverride;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\language\Config\LanguageConfigFactoryOverrideInterface;
use Drupal\Core\Config\ConfigFactoryOverrideInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language.config_factory_override service.
   *
   * @var \Drupal\language\Config\LanguageConfigFactoryOverrideInterface
   */
  protected $configFactoryOverride;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\Config\LanguageConfigFactoryOverrideInterface $config_factory_override
   *   The config_factory_override service.
   */
   public function __construct(LanguageConfigFactoryOverrideInterface $config_factory_override) {
     $this->configFactoryOverride = $config_factory_override;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('language.config_factory_override')
    );
  }

}
