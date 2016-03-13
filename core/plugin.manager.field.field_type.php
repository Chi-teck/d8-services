<?php

/**
 * @file
 * Example of usage the plugin.manager.field.field_type service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Field\FieldTypePluginManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Field\FieldTypePluginManagerInterface;
use Drupal\Component\Plugin\CategorizingPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.field.field_type service.
   *
   * @var \Drupal\Core\Field\FieldTypePluginManagerInterface
   */
  protected $fieldType;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Field\FieldTypePluginManagerInterface $field_type
   *   The field_type service.
   */
   public function __construct(FieldTypePluginManagerInterface $field_type) {
     $this->fieldType = $field_type;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.field.field_type')
    );
  }

}
