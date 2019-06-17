# GamblingTec RNG

## About
This is a simple wrapper using Zend/Math/Rand which has been certified by Sunseven NV for use with
a Curacao Gambling License.

The wrapper is freely available for use by the gambling community. By using this wrapper, we can assist you
with RNG certification which is a pre-requisite of a gambling license.

The advantages of using this wrapper is that we have already gone through the timely process of having the 
Zend/Math/Rand class approved for gambling activities and for this reason we can offer you a certificate for
your games quickly.

### Test Utility (command line)

For a demonstration of the GamblingTec RNG, please see: https://github.com/sunsevennv/gamblingtec-rng which is a 
command line utility using the wrapper.

### About Zend/Math/Rand

You can read about it here: https://docs.zendframework.com/zend-math/rand/

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

* email: brendan [at] gamblingTec.com
* WhatsApp: +44 (0)7498 105896
* SA Mobile: +27 (0)60-457-8084
* Sales office: +27 (0)21-839-5509
* skype: brendanjnash
* Discord: https://discord.gg/Kjy5qkq

