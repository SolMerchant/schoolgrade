<?php 
//a function refers to a block of statement that can be used more than once in a code/repeated.
/* we have two types of functions 
   inbuilt functions and  user defined functions
   functions do not execute immediately unless there is a function callfor it*/
   echo str_word_count("<p>my name is sol</p>");
   /*when working on user defined functionss you have to indicate the term function and give the function a name that will be used when calling it*/
   function classmay(){
   	//in the above case classmay is our function name
   	echo "Class May";
   }
   //function call below
   classmay();
   function calcme($first,$sec){
   	echo "my name is $first".$sec;

   }
   //function call with values to be stored in declared variables
   calcme("bruce","wantai")
   calcme("nicholas","seventytwo")
   calcme("gitau","mbugua")
 ?>