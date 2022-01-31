#include <string.h>
#include <stdio.h>
#include <stdlib.h>

// create an assignments struct with the following fields:
//  characters, character_no, time_difference

struct ASSIGNMENTS
{
  char characters[100];
  int character_no;
  int time_difference;
};

void stringify();

void getAssignmentFromFileString(char *assingment)
{

  // char assingment[] = "A - C - E - G, 4, 360";

  // assign a value to the ASSIGNMENTS struct
  struct ASSIGNMENTS assignments;

  // split the assignment string using commas

  // Returns first token
  char *token = strtok(assingment, ",");

  // Keep printing tokens while one of the
  // delimiters present in str[].
  //  while (token != NULL)
  //  {
  //    printf("%s\n", token);
  //    token = strtok(NULL, ",");
  //  }

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

    // printf("%s\n", token);
    token = strtok(NULL, ",");
    i++;
  }

  // print the assignments struct
  printf("characters: %s\n", assignments.characters);
  printf("character_no: %d\n", assignments.character_no);
  printf("time_difference: %d\n", assignments.time_difference);

  stringify();
}



// function to split up the characters string into an array of strings
void stringify(){
  // takes a string Q-S-U-W-Y and returns an array of strings {'Q', 'S', 'U', 'W', 'Y'}

  char characters[] = "Q-S-U-W-Y";

  // create an array of strings
  char *characters_array[5];

  // split the string using strtok
  char *token = strtok(characters, "-");

  // loop counter
  int i = 0;

  while (token != NULL)
  {
    // assign the token to the array
    characters_array[i] = token;

    // printf("%s\n", token);
    token = strtok(NULL, "-");
    i++;
  }

  // print the array
  for (int i = 0; i < 5; i++)
  {
    printf("%s\n", characters_array[i]);
  }


}