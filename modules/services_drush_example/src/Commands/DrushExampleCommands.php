<?php

declare(strict_types=1);

namespace Drupal\services_drush_example\Commands;

use Drupal\Core\Password\PasswordGeneratorInterface;
use Drush\Commands\DrushCommands;
use Drush\Attributes as Cli;

/**
 * Drush commands for the service_drush_example module.
 */
class DrushExampleCommands extends DrushCommands {

  /**
   * Creates a DrushExampleCommands service object.
   *
   * @param \Drupal\Core\Password\PasswordGeneratorInterface $passwordGenerator
   *   The password generator service.
   */
  public function __construct(protected PasswordGeneratorInterface $passwordGenerator) {
  }

  /**
   * Drush example command that generates a password.
   *
   * @param string $length
   *   The length of the password to generate.
   */
  #[Cli\Command(name: 'services-drush-example:generate-password', aliases: ['sde:gp'])]
  #[Cli\Argument(name: 'length', description: 'The password length.')]
  #[Cli\Usage(name: 'services-drush-example:generate-password 12', description: 'Generate a 12 character password.')]
  #[Cli\ValidateModulesEnabled(modules: ['services_drush_example'])]
  public function generatePassword(string $length = '10') {
    // All arguments sent to drush commands are strings, so we need to check
    // that the string is numeric and then convert the password length argument
    // to an integer.
    if (is_numeric($length) === FALSE) {
      $this->logger()->error(dt('Please enter a number for the password length.'));
      return;
    }

    $length = intval($length);

    $this->logger()->success(dt("Your generated password is:\n@password", ['@password' => $this->passwordGenerator->generate($length)]));
  }

}
