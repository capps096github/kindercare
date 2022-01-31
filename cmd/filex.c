
#include <stdio.h>
#include <stdlib.h>

// create an assignments struct with the following fields:
//  characters, character_no, time_difference

struct ASSIGNMENTS {
  char characters[100];
  int character_no;
  int time_difference;
};








int main()
{

  FILE *fptr;
  // File path
  char *filename = "E:\\Cephas Laravel\\kindercare\\web\\db\\assignments.txt";

  if ((fptr = fopen(filename, "r")) == NULL)
  {
    printf("Error! opening file");

    exit(1);
  }
  else
  {
    printf("File opened successfully\n");

    // get the file contents and print them out as strings


  }

  fclose(fptr);

  return 0;
}

// // get the file contents and print them out
// char ch;
// while ((ch = fgetc(fptr)) != EOF)
// {
//   printf("%c", ch);
// }
// fclose(fptr);

// the file has the following contents
// (C - E - F - H, 4, 2022 - 01 - 31, 23 : 33, 23 : 33, TR2345KLP)
// get the above contents from the file and translate them into a string
// the translated string cam then be split into an array of strings basing on the commas that separate various sections of the straing
