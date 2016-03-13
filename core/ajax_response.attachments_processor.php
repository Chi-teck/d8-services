<?php

/**
 * @file
 * Example of usage the ajax_response.attachments_processor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor;
// The service interfaces.
use Drupal\Core\Render\AttachmentsResponseProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The ajax_response.attachments_processor service.
   *
   * @var \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor
   */
  protected $attachmentsProcessor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor $attachments_processor
   *   The attachments_processor service.
   */
   public function __construct(AjaxResponseAttachmentsProcessor $attachments_processor) {
     $this->attachmentsProcessor = $attachments_processor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ajax_response.attachments_processor')
    );
  }

}
