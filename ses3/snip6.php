<?php
function e(){
    echo "this is e() \n";
};
function f(){
    echo "this is f() \n";
};
function g(){
    echo "this is g() \n";
};
g();
echo "**************\n";
g();
echo "**************\n";
g()()();
?>
