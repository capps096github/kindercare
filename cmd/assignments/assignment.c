#include <stdio.h>
#include <stdlib.h>

// Attempt assignment logic
#include "letters.c"


void readFileAndAttemptAssignment();
void getAssignmentFromFileString(char *assingment);

// create an assignments struct with the following fields:
//  characters, character_no, time_difference
struct ASSIGNMENTS
{
  char characters[100];
  int character_no;
  int time_difference;
};


void readFileAndAttemptAssignment()
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

    // get the file contents and convert them to a string
    char *buffer = malloc(sizeof(char) * 100);

    fgets(buffer, 100, fptr);

    getAssignmentFromFileString(buffer);

    fclose(fptr);
  }

  fclose(fptr);
}


void getAssignmentFromFileString(char *assingment)
{

  // assign a value to the ASSIGNMENTS struct
  struct ASSIGNMENTS assignments;

  // Returns first token
  char *token = strtok(assingment, "-");

  // loop counter
  int i = 0;

  while (token != NULL)
  {

    switch (i)
    {
    case 1:
      // convert token to int and assign it
      // to character_no
      assignments.character_no = atoi(token);

      break;
    case 2:
      // convert token to int and assign it
      // to assignment.time_difference
      assignments.time_difference = atoi(token);

      break;

    default:

      // characters
      strcpy(assignments.characters, token);

      break;
    }

    token = strtok(NULL, "-");
    i++;
  }

  // print the assignments struct
  // printf("characters: %s\n", assignments.characters);
  // printf("character_no: %d\n", assignments.character_no);
  // printf("time_difference: %d\n", assignments.time_difference);

  // start assignment attempt
  attemptAssignment(assignments.characters, assignments.character_no, assignments.time_difference);
}
