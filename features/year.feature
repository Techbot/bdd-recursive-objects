Feature: Multiple years creation
  in order to calculate total score
  As a player
  The system needs to create multiple years

  Rules :
  - Each year will add 10% interest to current credit balance calculated at end of year
  - The total amount of credits for the previous year equals the staring number of credits for the next new year.


  Scenario: Player creates 10 years
    Given an opening balance
    When I chose 10
    Then I should receive 10 year objects

  Scenario: Player gets 10% interest
    Given an opening balance
    When I chose 1
    Then I should receive my balance plus 10%

