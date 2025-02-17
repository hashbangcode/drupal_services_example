<?php

declare(strict_types=1);

namespace Drupal\services_lazy_example;

use Drupal\Core\Password\PasswordGeneratorInterface;

/**
 * An example of a service that accepts an argument.
 */
class SingleArgument implements SingleArgumentInterface {

  /**
   * Creates a SingleArgument service object.
   *
   * @param \Drupal\Core\Password\PasswordGeneratorInterface $passwordGenerator
   *   The password generator service.
   */
  public function __construct(protected PasswordGeneratorInterface $passwordGenerator) {
  }

  /**
   * {@inheritDoc}
   */
  public function generate12CharacterPassword():string {
    return $this->passwordGenerator->generate(12);
  }

}
