#include <stdio.h>
#include <stdlib.h>
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
    // get the file contents and print them out
    char ch;
    while ((ch = fgetc(fptr)) != EOF)
    {
      printf("%c", ch);
    }
    fclose(fptr);

  }

  fclose(fptr);

  return 0;
}
