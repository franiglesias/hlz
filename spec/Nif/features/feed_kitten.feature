Feature: Feed the cat
  As a proud cat owner
  I want to properly feed my kitten
  In order they grow happy and healthy

  Scenario Outline: Calculate food for kitten
    Given a kitty that weights <weight> kg
    When you feed it
    Then you should provide <energy> MJ of energy
    And you should provide <protein> kg of protein

    Examples:
      | weight | energy | protein |
      | 4.5    | 265    | 2.15    |
      | 5.7    | 315    | 2.55    |
