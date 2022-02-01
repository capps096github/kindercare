// this snippet will have a list of commands that can be used to run the program

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// get command from the user function
void klpCommands()
{

  // initialize all commands as constant strings
  char login[] = "login";
  char signup[] = "register";
  char logout[] = "logout";
  char help[] = "help";
  char exit[] = "exit";
  char viewall[] = "viewall";
  char checkstatus[] = "checkstatus";
  char attemptassignment[] = "attemptassignment";
  char viewassignment[] = "viewassignment";
  char checkdates[] = "checkdates";

  // command from the user
  char command[100];

  // continue to get command from user until user enters "exit"
  do
  {
    // capture a command from the user
    printf("\n\n+-- Enter a command --+\n\n");
    // prompt the user to enter a command
    printf("klp -> ");
    scanf("%s", &command);

    // compare the command with the list of commands
    if (strcmp(command, login) == 0)
    {
      printf("\n\n");
      printf("login\n");
      printf("\n\n");
    }
    else if (strcmp(command, signup) == 0)
    {
      printf("\n\n");
      printf("register\n");
      printf("\n\n");
    }
    else if (strcmp(command, logout) == 0)
    {
      printf("\n\n");
      printf("logout\n");
      printf("\n\n");
    }
    else if (strcmp(command, help) == 0)
    {
      printf("\n\n");
      // call the help function again
      cmdHelp();
      printf("\n\n");
    }
    else if (strcmp(command, exit) == 0)
    {
      printf("\n\n");
      // exit the program
      printf("Exiting the KLP...\n");
      printf("\n\n");
    }
    else if (strcmp(command, viewall) == 0)
    {
      printf("\n\n");
      printf("viewall\n");
      printf("\n\n");
    }
    else if (strcmp(command, checkstatus) == 0)
    {
      printf("\n\n");
      printf("checkstatus\n");
      printf("\n\n");
    }
    else if (strcmp(command, attemptassignment) == 0)
    {
      printf("\n\n");
      printf("attemptassignment\n");
      printf("\n\n");
    }
    else if (strcmp(command, viewassignment) == 0)
    {
      printf("\n\n");
      printf("viewassignment\n");
      printf("\n\n");
    }
    else if (strcmp(command, checkdates) == 0)
    {
      printf("\n\n");
      printf("checkdates\n");
      printf("\n\n");
    }
    else
    {
      printf("\n\n");
      printf("Invalid command\n");
      // call the help function again
      cmdHelp();
    }
  } while (strcmp(command, exit) != 0);
}