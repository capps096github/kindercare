

#include <stdio.h>
#include <stdlib.h>

// auth\auth.c
#include "../auth/auth.c"

void uploadAssignmentScore(int);

void upload(int finalScore)
{
  uploadAssignmentScore(finalScore);
}

// function to upload assignment score to db
void uploadAssignmentScorex(int finalScore)
{

  // creating file pointer to work with files
  FILE *fptr;

  char *filename = "..\\..\\db\\performance.txt";
  // char *filename = "performance.txt";
  FILE *authdb;

  // opening file in writing mode
  fptr = fopen(filename, "w");
  authdb = fopen("..\\auth\\auth.txt", "r");

  // exiting program
  if (fptr == NULL)
  {
    printf("\n\nError!\n\n");
    exit(1);
  }
  else
  {
    // printf("\n\nFile opened successfully\n\n");

    // ----------------------Code to get user id from code.txt ----------------------------
    // opening file in reading mode

    // declaring a char pointer
    char *userid = "";

    // check if authdb is null or not
    if (authdb == NULL)
    {
      // printf("\n\nError! User doesn't Exist\n\n");
      exit(1);
    }
    else
    {
      // printf("Auth Opened successfully\n");

      // PUPIL struct
      struct PUPIL pupil;

      // function loop
      while (fscanf(authdb, "(%[^,],%[^,],%[^,],%[^)])\n", pupil.fname, pupil.lname, pupil.userid, pupil.password) != EOF)
      {
        printf("%s\n", pupil.userid);
        userid = pupil.userid;
        printf("%s\n", userid);
      }
    }
    // --------------------------------------------------

    char result[1000];

    // printf("User Code: %s\n", userid);
    // add the score to the result string
    sprintf(result, "(1,%d, 'Add Comment', '%s')", finalScore, userid);
    printf("(1,%d, 'Add Comment', '%s')", finalScore, userid);

    fprintf(fptr, "%s", result);
    fclose(fptr);
  }
}

// function to upload assignment score to db
void uploadAssignmentScore(int finalScore)
{

  // creating file pointer to work with files
  FILE *fptr;

  // char *filename = "..\\..\\db\\performance.txt";
  FILE *authdb;

  // opening file in writing mode
  // fptr = fopen("..\\assignments\\performance.txt", "w");
  fptr = fopen("..\\assignments\\performance.txt", "w");
  authdb = fopen("..\\auth\\auth.txt", "r");

  // exiting program
  if (fptr == NULL)
  {
    // printf("\n\nError!\n\n");
    exit(1);
  }
  else
  {
    // printf("\n\nFile opened successfully\n\n");

    // ----------------------Code to get user id from code.txt ----------------------------
    // opening file in reading mode

    // declaring a char pointer
    char *userid = "";

    // check if authdb is null or not
    if (authdb == NULL)
    {
      printf("\n\nError! User doesn't Exist\n\n");
      exit(1);
    }
    else
    {
      // printf("Auth Opened successfully\n");

      // PUPIL struct
      struct PUPIL pupil;

      // function loop
      while (fscanf(authdb, "(%[^,],%[^,],%[^,],%[^)])\n", pupil.fname, pupil.lname, pupil.userid, pupil.password) != EOF)
      {
        // printf("%s\n", pupil.userid);
        userid = pupil.userid;
        // printf("%s\n", userid);
      }
    }
    // --------------------------------------------------

    char result[1000];

    // printf("User Code: %s\n", userid);
    // add the score to the result string
    sprintf(result, "(1,%d, 'Add Comment', '%s')", finalScore, userid);
    // printf("(1,%d, 'Add Comment', '%s')", finalScore, userid);

    fprintf(fptr, "%s", result);
    fclose(fptr);
  }
}