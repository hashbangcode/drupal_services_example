<?php

declare(strict_types=1);

namespace Drupal\services_parent_example;

use Drupal\Core\Password\PasswordGeneratorInterface;

/**
 * Generates a 20 character password.
 */
class Generate20CharacterPassword implements GenerateXCharacterPasswordInterface {

  /**
   * Creates a Generate20CharacterPassword service object.
   *
   * @param \Drupal\Core\Password\PasswordGeneratorInterface $passwordGenerator
   *   The password generator service.
   */
  public function __construct(protected PasswordGeneratorInterface $passwordGenerator) {
  }

  /**
   * {@inheritDoc}
   */
  public function generatePassword(): string {
    return $this->passwordGenerator->generate(20);
  }

}
