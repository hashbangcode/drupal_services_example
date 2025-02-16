<?php

declare(strict_types=1);

namespace Drupal\services_autowire_example;

use Drupal\Core\Password\PasswordGeneratorInterface;

/**
 * An example of service autowiring in action.
 */
class AutowireExample implements AutowireExampleInterface {

  /**
   * Creates a AutowireExample service object.
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
