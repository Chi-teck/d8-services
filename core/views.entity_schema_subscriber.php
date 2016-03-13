<?php

/**
 * @file
 * Example of usage the views.entity_schema_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber;
// The service interfaces.
use Drupal\Core\Entity\EntityTypeListenerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The views.entity_schema_subscriber service.
   *
   * @var \Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber
   */
  protected $entitySchemaSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber $entity_schema_subscriber
   *   The entity_schema_subscriber service.
   */
   public function __construct(ViewsEntitySchemaSubscriber $entity_schema_subscriber) {
     $this->entitySchemaSubscriber = $entity_schema_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.entity_schema_subscriber')
    );
  }

}
