<?php

/**
 * @file
 * Example of usage the plugin.manager.language_negotiation_method service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\LanguageNegotiationMethodManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.language_negotiation_method service.
   *
   * @var \Drupal\language\LanguageNegotiationMethodManager
   */
  protected $languageNegotiationMethod;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\LanguageNegotiationMethodManager $language_negotiation_method
   *   The language_negotiation_method service.
   */
   public function __construct(LanguageNegotiationMethodManager $language_negotiation_method) {
     $this->languageNegotiationMethod = $language_negotiation_method;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.language_negotiation_method')
    );
  }

}
