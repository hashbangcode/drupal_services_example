<?php

declare(strict_types=1);

namespace Drupal\services_calls_example;

/**
 * Interface for the CallsExample service class.
 */
interface CallsExampleInterface {

  /**
   * Generates a password n number of characters long.
   *
   * @return string
   *   The resulting payload string.
   */
  public function generatePassword():string;

}
