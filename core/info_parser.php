<?php

/**
 * @file
 * Example of usage the info_parser service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\InfoParser;
// The service interfaces.
use Drupal\Core\Extension\InfoParserInterface;

/**
 * The example.
 */
class Example {

  /**
   * The info_parser service.
   *
   * @var \Drupal\Core\Extension\InfoParserInterface
   */
  protected $infoParser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\InfoParserInterface $info_parser
   *   The info_parser service.
   */
   public function __construct(InfoParserInterface $info_parser) {
     $this->infoParser = $info_parser;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('info_parser')
    );
  }

}
