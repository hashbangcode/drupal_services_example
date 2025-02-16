<?php

declare(strict_types=1);

namespace Drupal\services_autowire_example;

/**
 * Interface for the AutowireExample service.
 */
interface AutowireExampleInterface {

  /**
   * Generates a password 12 characters long.
   *
   * @return string
   *   The resulting payload string.
   */
  public function generate12CharacterPassword():string;

}
