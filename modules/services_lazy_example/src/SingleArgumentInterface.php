<?php

declare(strict_types=1);

namespace Drupal\services_lazy_example;

/**
 * Interface for the SingleArgument service.
 */
interface SingleArgumentInterface {

  /**
   * Generates a password 12 characters long.
   *
   * @return string
   *   The resulting payload string.
   */
  public function generate12CharacterPassword():string;

}
