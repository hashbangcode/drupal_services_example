<?php

declare(strict_types=1);

namespace Drupal\Tests\services_drush_example\Functional;

use Drupal\Tests\BrowserTestBase;
use Drush\TestTraits\DrushTestTrait;

/**
 * Tests the DrushExampleCommands drush commands.
 */
class DrushExampleCommandsTest extends BrowserTestBase {

  use DrushTestTrait;

  /**
   * {@inheritDoc}
   */
  protected static $modules = [
    'services_drush_example',
  ];

  /**
   * {@inheritDoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Test the example generate password Drush command.
   */
  public function testGeneratePasswordOutputText() {
    $this->drush('services-drush-example:generate-password');
    $this->assertStringContainsString('Your generated password is:', $this->getErrorOutput());
  }

  /**
   * Test the that a non-numeric length argument creates an error.
   */
  public function testNonNumericLengthCreatesError() {
    $this->drush('services-drush-example:generate-password', ['soidufyh']);
    $this->assertStringContainsString('Please enter a number for the password length.', $this->getErrorOutput());
    $this->assertStringNotContainsString('Your generated password is:', $this->getErrorOutput());
  }

}
