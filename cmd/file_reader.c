#include <stdio.h>
#include <stdlib.h>

#include "stringx.c"

int main()
{

  FILE *fptr;
  // File path
  char *filename = "E:\\Cephas Laravel\\kindercare\\web\\db\\assignments.txt";

  if ((fptr = fopen(filename, "r")) == NULL)
  {
    printf("Error! opening file");

    exit(1);
  }else{
    printf("File opened successfully\n");


// get the file contents and convert them to a string

    char *buffer = malloc(sizeof(char) * 100);

    fgets(buffer, 100, fptr);

    getAssignmentFromFileString(buffer);
        // printf("%s", buffer);

        fclose(fptr);
  }

  fclose(fptr);

  return 0;
}
