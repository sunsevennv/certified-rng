# GamblingTec RNG

## About
This is a simple wrapper using Laminas/Laminas/Rand which has been certified by Sunseven NV for use with
a Curacao Gambling License.

The wrapper is freely available for use by the gambling community. By using this wrapper, we can assist you
with RNG certification which is a pre-requisite of a gambling license.

When certifying software, we must submit test utilities to the test lab which they then use to generate large quantities
of data. The lab then tests the data for randomness by running multiple tests against the data. This is a time consuming
process often taking multiple hours to complete each test. For this reason, obtaining RNG certification can take a 
number of weeks to obtain.

The advantages of using this wrapper is that we have already written the test utilities needed by the lab who have our data
on file. For this reason, we can obtain certification much quicker if you use our library.

### Test Utility (command line)

For a demonstration of the GamblingTec RNG, please see: https://github.com/sunsevennv/gamblingtec-rng which is a 
command line utility using the wrapper.

### About Laminas/Math/Rand

You can read about it here: https://docs.laminas.dev/laminas-math/rand/

### Prerequisites

- PHP 7.0 +

### Installation

Use composer to install.

> composer require gamblingtec/certified-rng

or just composer install with the following line in your json file

> "gamblingtec/certified-rng": "^1.0"

## How to use the utility
Once the library has been installed you will have available to you four static commands which you can use to generate random numbers.
To use them include the GamblingTecRNG class:

use Gamblingtec\RNG\Utility\GamblingTecRNG;

And then call any of the static methods:

- $result = GamblingTecRNG::getInteger(0, $i);
- $result = GamblingTecRNG::boolean()

## Third party wrappers using this class
If you have written a class using our certified rng then let us know and we will add a link to it.
* https://github.com/branoberc/rngendpoint

## Gambling License & RNG Certification

Should your organisation require an RNG certificate in order to obtain a gambling license, we can provide you with 
a certificate for the class.

You can place your order here: https://gtec.curacaowebhosting.com/cart.php?gid=9

* email: brendan [at] gamblingTec.com
* WhatsApp: +44 (0)7498 105896
* skype: brendanjnash

