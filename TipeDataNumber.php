<?php

echo "Decimal: ";
var_dump(1234);

echo "Ocral: ";
var_dump(0123);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b11111);

echo "Underscore di Number: ";
var_dump(1_000_000);

//Tipe Floating
echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E Notation Plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "Floating Point dengan E Notation Minus (1.2 x 0.001): ";
var_dump(2e-3);

echo "Undersocre di Floating Point: ";
var_dump(1_000.333);


//Integer Overflow
echo "Integer Overflow 32 bit: ";
var_dump(2147483647);

echo "Integer Overflow 64 bit: ";
var_dump(9223372036854775807);