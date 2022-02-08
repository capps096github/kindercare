#include <stdio.h>
#include <stdlib.h>

// Attempt assignment logic
#include "letters.c"

void readFileAndAttemptAssignment();
void getAssignmentFromFileString(char *assingment);

// view assignment functions
void viewAssignment();
void getAssignmentDetails(char *assingment);

// create an assignments struct with the following fields:
//  assignment_id, characters, character_no, time_difference
struct ASSIGNMENTS
{
  int assignment_id;
  char characters[100];
  int character_no;
  int time_difference;
};

void readFileAndAttemptAssignment()
{

  FILE *fptr;
  // File path
  char *filename = "..\\db\\assignments.txt";

  // open file in reading mode
  fptr = fopen(filename, "r");

  if (fptr == NULL)
  {
    printf("Error! opening Assignment file");

    exit(1);
  }
  else
  {
    // printf("Assignment Opened successfully\n");

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

      // characters
      strcpy(assignments.characters, token);

      break;
    case 2:
      // convert token to int and assign it
      // to character_no
      assignments.character_no = atoi(token);

      break;
    case 3:
      // convert token to int and assign it
      // to assignment.time_difference
      assignments.time_difference = atoi(token);

      break;

    default:
      // convert token to int and assign it
      // to assignment.assignment_id
      assignments.assignment_id = atoi(token);

      break;
    }

    token = strtok(NULL, "-");
    i++;
  }

  // print the assignments struct
  printf("\n\n");
  // assignmenst.assignment_id
  // printf("-:- ASSIGNMENT ID: %d\n", assignments.assignment_id);
  // printf("characters: %s\n", assignments.characters);
  // printf("character_no: %d\n", assignments.character_no);
  // printf("time_difference: %d\n", assignments.time_difference);

  // start assignment attempt
  attemptAssignment(assignments.characters, assignments.character_no, assignments.time_difference, assignments.assignment_id);
}

// This will be called when the user types in the command "viewall"
void viewAssignmentInfo()
{

  FILE *assignmentFile;
  // File path
  char *filename = "..\\db\\assignments.txt";

  // open file in reading mode
  assignmentFile = fopen(filename, "r");

  if (assignmentFile == NULL)
  {
    printf("Error! opening Assignment file");

    exit(1);
  }
  else
  {
    // printf("Assignment Opened successfully\n");

    // get the file contents and convert them to a string
    char *buffer = malloc(sizeof(char) * 100);

    fgets(buffer, 100, assignmentFile);

    getAssignmentDetails(buffer);

    fclose(assignmentFile);
  }

  fclose(assignmentFile);
}

// assignment details
void getAssignmentDetails(char *assingment)
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

      // characters
      strcpy(assignments.characters, token);

      break;
    case 2:
      // convert token to int and assign it
      // to character_no
      assignments.character_no = atoi(token);

      break;
    case 3:
      // convert token to int and assign it
      // to assignment.time_difference
      assignments.time_difference = atoi(token);

      break;

    default:
      // convert token to int and assign it
      // to assignment.assignment_id
      assignments.assignment_id = atoi(token);

      break;
    }

    token = strtok(NULL, "-");
    i++;
  }

  // print the assignments struct
  printf("\n\n+------------------------------------------------------+\n");
  printf("                 ASSIGNMENT %d DETAILS                         \n", assignments.assignment_id);
  printf("+------------------------------------------------------+\n");
  printf("| -:- ASSIGNMENT ID:        |   %d\n", assignments.assignment_id);
  printf("+---------------------------+--------------------------+\n");
  printf("| -:- CHARACTERS:           |   %s\n", assignments.characters);
  printf("+---------------------------+--------------------------+\n");

  printf("| -:- NUMBER OF CHARACTERS: |   %d\n", assignments.character_no);
  printf("+---------------------------+--------------------------+\n");

  printf("| -:- ASSIGNMENT DURATION:  |   %d\n", assignments.time_difference);
  printf("+---------------------------+--------------------------+\n");

  printf("| -:- ATTEMPT STATUS:       |   %d\n", assignments.time_difference);
  printf("+---------------------------+--------------------------+\n\n");
}

// check if the user has attempted the assignment
void checkAssignmentStatus(int assignment_id)
{

  // open the file in read mode
  FILE *performance;
  performance = fopen("performance.txt", "r");
}