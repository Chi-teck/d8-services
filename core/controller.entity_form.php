<?php

/**
 * @file
 * Example of usage the controller.entity_form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\HtmlEntityFormController;

/**
 * The example.
 */
class Example {

  /**
   * The controller.entity_form service.
   *
   * @var \Drupal\Core\Entity\HtmlEntityFormController
   */
  protected $entityForm;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\HtmlEntityFormController $entity_form
   *   The entity_form service.
   */
   public function __construct(HtmlEntityFormController $entity_form) {
     $this->entityForm = $entity_form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('controller.entity_form')
    );
  }

}
