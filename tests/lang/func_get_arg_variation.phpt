--TEST--
func_get_arg test
--FILE--
<?php

function foo($a)
{
   $a=5;
   try {
       echo func_get_arg(-1);
   } catch (\Error $e) {
       echo $e->getMessage() . \PHP_EOL;
   }

   try {
       echo func_get_arg(2);
   } catch (\Error $e) {
       echo $e->getMessage() . \PHP_EOL;
   }
}
foo(2);

?>
--EXPECT--
func_get_arg(): Argument #1 ($arg_num) must be greater than or equal to 0
func_get_arg(): Argument 2 not passed to function
