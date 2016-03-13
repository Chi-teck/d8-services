<?php

/**
 * @file
 * Example of usage the html_response.big_pipe_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\big_pipe\EventSubscriber\HtmlResponseBigPipeSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The html_response.big_pipe_subscriber service.
   *
   * @var \Drupal\big_pipe\EventSubscriber\HtmlResponseBigPipeSubscriber
   */
  protected $bigPipeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\big_pipe\EventSubscriber\HtmlResponseBigPipeSubscriber $big_pipe_subscriber
   *   The big_pipe_subscriber service.
   */
   public function __construct(HtmlResponseBigPipeSubscriber $big_pipe_subscriber) {
     $this->bigPipeSubscriber = $big_pipe_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('html_response.big_pipe_subscriber')
    );
  }

}
