# pantherBootstrap5
Provide Panther tests for bootstrap 4 and bootstrap 5. Will fail for bootstrap 5

# Prerequisites

PHP 8
Chrome to launch tests (or you can update the HomeControllerTest.php file)

# Installation

1. `git clone https://github.com/bastien70/pantherBootstrap5.git`

2. `cd pantherBootstrap5`

3. `composer install`

4. `vendor/bin/bdi detect drivers`


# Usage

Just launch tests on **tests/Controller/HomeControllerTest.php**
Test with bootstrap 4 will work.
Test with bootstrap 5 will not work.
