<?php

/**
 * @file
 * Example of usage the entity.form_builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityFormBuilder;
// The service interfaces.
use Drupal\Core\Entity\EntityFormBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.form_builder service.
   *
   * @var \Drupal\Core\Entity\EntityFormBuilderInterface
   */
  protected $formBuilder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityFormBuilderInterface $form_builder
   *   The form_builder service.
   */
   public function __construct(EntityFormBuilderInterface $form_builder) {
     $this->formBuilder = $form_builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.form_builder')
    );
  }

}
