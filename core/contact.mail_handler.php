<?php

/**
 * @file
 * Example of usage the contact.mail_handler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\contact\MailHandler;
// The service interfaces.
use Drupal\contact\MailHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The contact.mail_handler service.
   *
   * @var \Drupal\contact\MailHandlerInterface
   */
  protected $mailHandler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\contact\MailHandlerInterface $mail_handler
   *   The mail_handler service.
   */
   public function __construct(MailHandlerInterface $mail_handler) {
     $this->mailHandler = $mail_handler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('contact.mail_handler')
    );
  }

}
