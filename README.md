# Drupal Services Examples

A set of examples of different ways to use the services system in Drupal.

## Services Simple Example

Shows an example of a simple service definition, with no arguments or other
additions to the service.

## Services Argument Example

Shows an example of a service that accepts arguments, in this case an
additional service is passed to the custom service.

## Services Autowire Example

Shows an example of autowiring a service so that the arguments of a service
don't need to be defined.

## Services Controller Example

Shows how services are injected into a controller.

## Services Decorator Example

Shows a service being overridden by the decorator property.

## Services Plugin Example

Shows how services are injected into a plugin.

## Services Drush Example

Shows a service being created for use within Drush.

## Services Parent Example

Shows how multiple services can accept arguments set in a parent service. Also,
this shows the `abstract` keyword in use since the parent service is made as a
service that can't be used.

## Services Alias Example

An example of how to alias a service so that it can be called in using different
names.

## Services Lazy Example

Using the lazy keyword to load a service in a performant way.

Note that the proxy class here was generated using the following command
(on ddev).

`ddev exec php web/core/scripts/generate-proxy-class.php
'Drupal\\services_lazy_example\\SingleArgument'
"web/modules/custom/drupal_services_examples/modules/services_lazy_example/src"`

The __module also needs to be installed__ for this command to work.

## Services Calls Example

An example of using the `calls` directive to side inject a dependency into a
service.
