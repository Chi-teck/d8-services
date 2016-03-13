<?php

/**
 * @file
 * Example of usage the html_response.placeholder_strategy_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\HtmlResponsePlaceholderStrategySubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The html_response.placeholder_strategy_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\HtmlResponsePlaceholderStrategySubscriber
   */
  protected $placeholderStrategySubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\HtmlResponsePlaceholderStrategySubscriber $placeholder_strategy_subscriber
   *   The placeholder_strategy_subscriber service.
   */
   public function __construct(HtmlResponsePlaceholderStrategySubscriber $placeholder_strategy_subscriber) {
     $this->placeholderStrategySubscriber = $placeholder_strategy_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('html_response.placeholder_strategy_subscriber')
    );
  }

}
