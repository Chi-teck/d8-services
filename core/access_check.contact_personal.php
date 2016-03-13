<?php

/**
 * @file
 * Example of usage the access_check.contact_personal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\contact\Access\ContactPageAccess;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.contact_personal service.
   *
   * @var \Drupal\contact\Access\ContactPageAccess
   */
  protected $contactPersonal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\contact\Access\ContactPageAccess $contact_personal
   *   The contact_personal service.
   */
   public function __construct(ContactPageAccess $contact_personal) {
     $this->contactPersonal = $contact_personal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.contact_personal')
    );
  }

}
