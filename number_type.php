<?php

echo "Decimal : ";
var_dump(5678);

echo "Octal : ";
var_dump(45678);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in Number : ";
var_dump(2_333_444_565);

echo "Floating Point : ";
var_dump(1.900);

echo "Floating Point with E notation : (2.5 x 1000) : ";
var_dump(2.5e3);

echo "Floating Point with E notation minus : (2.5 x 0,001) : ";
var_dump(2.5e-3);

echo "Underscore in Floating Point : ";
var_dump(2_555.255);

echo "Integer Overflow : ";
var_dump(992928304805720429474);