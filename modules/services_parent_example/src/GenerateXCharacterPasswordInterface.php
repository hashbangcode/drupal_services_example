<?php

declare(strict_types=1);

namespace Drupal\services_parent_example;

/**
 * Interface for the GenerateXCharacterPassword services.
 */
interface GenerateXCharacterPasswordInterface {

  /**
   * Generates a password n number of characters long.
   *
   * @return string
   *   The resulting payload string.
   */
  public function generatePassword():string;

}
