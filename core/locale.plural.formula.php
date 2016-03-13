<?php

/**
 * @file
 * Example of usage the locale.plural.formula service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\PluralFormula;
// The service interfaces.
use Drupal\locale\PluralFormulaInterface;

/**
 * The example.
 */
class Example {

  /**
   * The locale.plural.formula service.
   *
   * @var \Drupal\locale\PluralFormulaInterface
   */
  protected $formula;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\PluralFormulaInterface $formula
   *   The formula service.
   */
   public function __construct(PluralFormulaInterface $formula) {
     $this->formula = $formula;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.plural.formula')
    );
  }

}
