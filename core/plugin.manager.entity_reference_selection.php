<?php

/**
 * @file
 * Example of usage the plugin.manager.entity_reference_selection service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface;
use Drupal\Component\Plugin\FallbackPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.entity_reference_selection service.
   *
   * @var \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface
   */
  protected $entityReferenceSelection;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface $entity_reference_selection
   *   The entity_reference_selection service.
   */
   public function __construct(SelectionPluginManagerInterface $entity_reference_selection) {
     $this->entityReferenceSelection = $entity_reference_selection;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.entity_reference_selection')
    );
  }

}
