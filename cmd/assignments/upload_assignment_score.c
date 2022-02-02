

#include <stdio.h>
#include <stdlib.h>

void uploadAssignmentScore(int finalScore)
{

  // creating file pointer to work with files
  FILE *fptr;

  char *filename = "performance.txt";

  // opening file in writing mode
  fptr = fopen(filename, "w");

  // exiting program
  if (fptr == NULL)
  {
    printf("Error!");
    exit(1);
  }
  // printf("Enter a sentence:\n");
  // fgets(sentence, sizeof(sentence), stdin);

  char result[1000];

  // add the score to the result string
  sprintf(result, "(1,%d, 'Add Comment', 'user_code')", finalScore);

  fprintf(fptr, "%s", result);
  fclose(fptr);
}