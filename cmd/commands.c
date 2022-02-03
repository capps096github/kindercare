// this snippet will have a list of commands that can be used to run the program

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// auth
// #include "auth/auth.c"

// assignments
#include "assignments/assignment.c"
#include "assignments/assignmentscore.c"

//checkstatus
#include "checkstatus/checkstatus.c"

//viewassignment
#include "assignments/viewassignment.c"

// get command from the user function
void klpCommands()
{

  // initialize all commands as constant strings
  char login[] = "login";
  char signup[] = "signup";
  char logout[] = "logout";
  char help[] = "help";
  char exit[] = "exit";
  char viewall[] = "viewall";
  char checkstatus[] = "checkstatus";
  char attempt[] = "attempt";
  char viewassignment[] = "viewassignment";
  char checkdates[] = "checkdates";

  // command from the user
  char command[100];

  // continue to get command from user until user enters "exit"
  do
  {

    // prompt the user to enter a command
    printf("\n\n -:- (Enter a command) klp -> ");
    scanf("%s", &command);

    // check auth.txt if its not empty the user command is executed else login

    // compare the command with the list of commands
    if (strcmp(command, login) == 0)
    {
      klpLogin();
    }
    else if (strcmp(command, signup) == 0)
    {
      klpSignup();
    }
    else if (strcmp(command, logout) == 0)
    {
      klpLogout();
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
      printf("\n\nExiting the KLP...\n\n\n");
      _Exit(0);
    }
    else if (strcmp(command, viewall) == 0)
    {
      printf("\n\n");
      printf("viewall\n");
      printf("\n\n");
    }
    else if (strcmp(command, checkstatus) == 0)
    {
      checkStatus ();
    }
    else if (strcmp(command, attempt) == 0)
    {
      // read file and attempt assignment
      readFileAndAttemptAssignment();
    }
    else if (strcmp(command, viewassignment) == 0)
    {
      viewAssignment ();
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