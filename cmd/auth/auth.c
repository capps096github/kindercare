#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct PUPIL
{
  char fname[256];
  char lname[256];
  char userid[256];
  char password[256];
};

// sign up function
void klpSignup()
{
  // creating file pointer to work with files
  FILE *authdb;

  char *filename = "auth\\auth.txt";

  // opening file in writing mode
  authdb = fopen(filename, "w");

  // exiting program
  if (authdb == NULL)
  {
    printf("Error!");
    exit(1);
  }

  // welcome text
  printf("\n +------------------------- WELCOME TO KINDERCARE LEARNING PLATFORM (KLP) - COMMAND LINE INTERFACE -------------------------+\n\n");

  printf("\n-:---- CREATE YOUR ACCOUNT TODAY ----:-\n\n");

  // PUPIL struct
  struct PUPIL pupil;

  printf("-:- ENTER YOUR DETAILS BELOW:\n\n");

  printf("FIRST NAME: ");
  scanf("%s", &pupil.fname);

  printf("LAST NAME: ");
  scanf("%s", &pupil.lname);

  printf("USER ID: ");
  scanf("%s", &pupil.userid);

  printf("PASSWORD: ");
  scanf("%s", &pupil.password);

  //    write the stuct to the file using fprintf
  fprintf(authdb, "(%s,%s,%s,%s)\n", pupil.fname, pupil.lname, pupil.userid, pupil.password);

  printf("\n+------------------------- SIGN UP SUCCESSFUL -------------------------+\n");

  fclose(authdb);
}

// login function
void klpLogin()
{

  char userid[256], password[256];

  // opening file in reading mode
  FILE *authdb;
  authdb = fopen("auth\\auth.txt", "r");

  //
  printf("\n +------------------------- LOGIN TO KINDERCARE LEARNING PLATFORM (KLP) - COMMAND LINE INTERFACE -------------------------+\n\n");

  // capture user Id
  printf("USER ID: ");
  scanf("%s", &userid);

  // capture password
  printf("PASSWORD: ");
  scanf("%s", &password);

  // check if authdb is null or not
  if (authdb == NULL)
  {
    printf("\n\nError! Auth Database not found!\n\n +--- Create an Account Instead ---+\n\n");

    klpSignup();
    // exit(1);
  }
  else
  {
    // printf("Auth Opened successfully\n");

    // PUPIL struct
    struct PUPIL pupil;

    // function loop
    while (fscanf(authdb, "(%[^,],%[^,],%[^,],%[^)])\n", pupil.fname, pupil.lname, pupil.userid, pupil.password) != EOF)
    {

      // check if userid and password are the same
      if (strcmp(userid, pupil.userid) == 0 && strcmp(password, pupil.password) == 0)
      {

        printf("\n+------------------------- HEY %s %s,  LOGIN SUCCESSFUL -------------------------+\n", strupr(pupil.fname), strupr(pupil.lname));
        break;
      }
      else
      {
        printf("\n+------------------------- LOGIN FAILED -------------------------+\n");
        break;
      }
    }
  }
}

void klpLogout()
{

  printf("\n\n+------------------------- - - - LOGGED OUT - - - -------------------------+\n\n");

  // just exit the app
  exit(1);
}

// a function to check if the auth.txt file is empty or not
int isEmpty()
{
  // opening file in reading mode
  FILE *authdb;
  authdb = fopen("auth\\auth.txt", "r");

  // check if authdb is null or not
  if (authdb == NULL)
  {
    // printf("\n\nError! opening file\n\n");
    // exit(1);

    printf("\n\nError! Auth Database not found!\n\n");

    // klpSignup();
  }
  else
  {
    // PUPIL struct
    struct PUPIL pupil;

    // function loop
    while (fscanf(authdb, "(%[^,],%[^,],%[^,],%[^)])\n", pupil.fname, pupil.lname, pupil.userid, pupil.password) != EOF)
    {
      return 0;
    }
  }
  return 1;
}