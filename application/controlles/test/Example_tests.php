<?php

require_once(APPPATH . '/controllers/test/Toast.php');

class Example_tests extends Toast
{
    public function __construct()
    {
        parent::__construct(__FILE__);
        // Load any models, libraries etc. you need here
    }

    /**
     * OPTIONAL; Anything in this public function will be run before each test
     * Good for doing cleanup: resetting sessions, renewing objects, etc.
     */
    public function _pre() {}

    /**
     * OPTIONAL; Anything in this public function will be run after each test
     * I use it for setting $this->message = $this->My_model->getError();
     */
    public function _post() {}


    /* TESTS BELOW */

    public function test_simple_addition()
    {
        $var = 2 + 2;
        $this->_assert_equals($var, 4);
    }


    public function test_that_fails()
    {
        $a = 1;

        // You can test multiple assertions / variables in one public function:

        $this->_assert_true($a); // fail

        // Since one of the assertions failed, this test case will fail
    }


    public function test_or_operator()
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
// Location: ./application/controllers/test/Example_test.php */
