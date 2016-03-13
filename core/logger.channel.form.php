<?php

/**
 * @file
 * Example of usage the logger.channel.form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Logger\LoggerChannel;
// The service interfaces.
use Drupal\Core\Logger\LoggerChannelInterface;
use Psr\Log\LoggerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.channel.form service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $form;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $form
   *   The form service.
   */
   public function __construct(LoggerChannelInterface $form) {
     $this->form = $form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.form')
    );
  }

}
