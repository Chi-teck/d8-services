<?php

/**
 * @file
 * Example of usage the html_response.attachments_processor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\big_pipe\Render\BigPipeResponseAttachmentsProcessor;
// The service interfaces.
use Drupal\Core\Render\AttachmentsResponseProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The html_response.attachments_processor service.
   *
   * @var \Drupal\big_pipe\Render\BigPipeResponseAttachmentsProcessor
   */
  protected $attachmentsProcessor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\big_pipe\Render\BigPipeResponseAttachmentsProcessor $attachments_processor
   *   The attachments_processor service.
   */
   public function __construct(BigPipeResponseAttachmentsProcessor $attachments_processor) {
     $this->attachmentsProcessor = $attachments_processor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('html_response.attachments_processor')
    );
  }

}
