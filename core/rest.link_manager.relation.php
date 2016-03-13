<?php

/**
 * @file
 * Example of usage the rest.link_manager.relation service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\LinkManager\RelationLinkManager;
// The service interfaces.
use Drupal\rest\LinkManager\RelationLinkManagerInterface;
use Drupal\rest\LinkManager\ConfigurableLinkManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The rest.link_manager.relation service.
   *
   * @var \Drupal\rest\LinkManager\RelationLinkManagerInterface
   */
  protected $relation;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\LinkManager\RelationLinkManagerInterface $relation
   *   The relation service.
   */
   public function __construct(RelationLinkManagerInterface $relation) {
     $this->relation = $relation;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('rest.link_manager.relation')
    );
  }

}
