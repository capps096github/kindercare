#include <string.h>
#include <stdio.h>
#include <stdlib.h>


int main(){

 char  assingment[] = "A - C - E - G, 4, 360";

// split the assignment string using commas

 // Returns first token
 char *token = strtok(assingment, ",");

 // Keep printing tokens while one of the
 // delimiters present in str[].
 while (token != NULL)
 {
   printf("%s\n", token);
   token = strtok(NULL, ",");
 }


// for each token, assign it to the appropriate field in the struct
// the fields are: characters, character_no, time_difference


   return 0;
 }