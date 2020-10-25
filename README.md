# Getting Started
These instructions will get you a copy of the REST API running on your local machine for development and testing purposes.

# Installing dependencies
1- install composer
2- php version 7.2

# Test the API
1- run (php -S localhost:8000) command inside src file
2- download postman collection attached with email and play with the request

## Description of the problem and solution
manage product and offers proccess
## my solution focused only in backend

## i apply multiple design patterns over the whole app
### idevide my app to 3 main Modules
### Product Module
focus on product and card creation and handling
#### design patterns o Product Module
1-builder pattern : for creating card that consist of product 
2-proxy pattern : for enforce client code to send available products

### Offer Module
focus on product and card creation and handling
#### design patterns o Product Module
1-stratigy pattern : for handling offers its multiple behaviours and each one different 
2-factory pattern : for creating offers depending on card items without attend to details

### calculation Module
focus on calculate different falgs required to display that module is helper for card entity 