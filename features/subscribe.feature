Feature: Subscribe kittens
  As a proud cat owner
  I want to register my cats
  In order to have them in kitten service

  Scenario: Subscribe a bunch of kittens
    Given I have several cats with names
      | Lord Whiskers |
      | Simba         |
      | Max           |
      | Banjo         |
      | Tigger        |
    When I introduce their names
    Then They should be registered

