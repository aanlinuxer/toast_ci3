# TOAST CI3

TOAST CI3 hanya sedikit modifikasi agar TOAST dapat berjalan di CI 3.0x. 
Credit sebenarnya untuk mail@jensroland.com TOAST : http://jensroland.com/projects/toast/

Library ini menggunakan Unit Testing built-in dari CI 3.0x. 
Jika Anda lebih memimilih PHPUnit, sebaiknya menggunakan https://github.com/kenjis/ci-phpunit-test


## Instalasi

Copy folder application/controllers/test ke folder application/controllers proyek CI 3 Anda.
Ubah ENVIRONMENT menjadi `testing` di file `index.php`

```php
//...
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'testing');
//...
```


## Penggunaan

Akses ke http://localhost/nama_proyek/index.php/test/toast_all

Atau, dengan mod_rewrite http://localhost/nama_proyek/test/toast_all


## Contoh

![Example Output](/test_example.png "Example Output")


```php
<?php
require_once(APPPATH . '/controllers/test/Toast.php');

class Example_tests extends Toast
{
	function __construct()
	{
		parent::__construct(__FILE__);
		// Load any models, libraries etc. you need here
	}

	/**
	 * OPTIONAL; Anything in this function will be run before each test
	 * Good for doing cleanup: resetting sessions, renewing objects, etc.
	 */
	function _pre() {}

	/**
	 * OPTIONAL; Anything in this function will be run after each test
	 * I use it for setting $this->message = $this->My_model->getError();
	 */
	function _post() {}


	/* TESTS BELOW */

	function test_simple_addition()
	{
		$var = 2 + 2;
		$this->_assert_equals($var, 4);
	}


	function test_that_fails()
	{
		$a = 1;

		// You can test multiple assertions / variables in one function:

		$this->_assert_true($a); // fail

		// Since one of the assertions failed, this test case will fail
	}


	function test_or_operator()
	{
		$a = true;
		$b = false;
		$var = $a || $b;

		$this->_assert_true($var);

		// If you need to, you can pass a message /
		// description to the unit test results page:

		$this->message = '$a || $b';
	}

}

// End of file Example_test.php */
// Location: ./system/application/controllers/test/example_test.php */
```
