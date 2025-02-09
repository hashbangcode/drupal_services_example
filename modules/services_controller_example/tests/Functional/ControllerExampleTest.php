<?php

namespace Drupal\Tests\services_controller_example\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Browser tests for the ControllerExample controller.
 */
class ControllerExampleTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_controller_example',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Test the response from the 'services_controller_example' route.
   */
  public function testControllerRespondsWithTime() {
    $this->drupalGet('drupal-services-examples/services-controller-example');
    $this->assertSession()->pageTextContains('Sat, 14 Feb 2009 - 10:31');
  }

}
