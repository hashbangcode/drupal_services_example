<?php

declare(strict_types=1);

namespace Drupal\services_calls_example;

use Drupal\Core\Password\PasswordGeneratorInterface;

/**
 * Example of the calls directive in action.
 */
class CallsExample {

  /**
   * The password generator service.
   *
   * @var \Drupal\Core\Password\PasswordGeneratorInterface
   */
  protected $passwordGenerator;

  /**
   * Set the password generator service.
   *
   * @param \Drupal\Core\Password\PasswordGeneratorInterface $passwordGenerator
   *   The password generator service.
   */
  public function setPasswordGenerator(PasswordGeneratorInterface $passwordGenerator) {
    $this->passwordGenerator = $passwordGenerator;
  }

  /**
   * {@inheritDoc}
   */
  public function generatePassword(): string {
    return $this->passwordGenerator->generate(12);
  }

}
