#include <stdio.h>
#include <stdlib.h>

// this snippet will have a list of commands that can be used to run the program
void cmdHelp()
{

  // this is the list of commands that can be used to run the program
  // login, register, logout,help,exit, viewall, checkstatus, attemptassignment, viewassignment <assignment_id>, checkdates <start_date> <end_date>
  printf("\n\nCOMMON COMMANDS TO GIVE YOU MORE CONTROL OF THE KLP - COMMAND LINE :\n\n");

  // create a table with commands and their descriptions
  printf("+---------------------------------------------------------------------------------------------------+\n");
  printf("| COMMAND                           | DESCRIPTION                                                   |\n");
  printf("+---------------------------------------------------------------------------------------------------+\n");
  printf("|                                   |                                                               |\n");
  printf("| login                             | login to the KLP                                              |\n");
  printf("| signup                            | signs up a new user                                           |\n");
  printf("| logout                            | logout of the KLP                                             |\n");
  printf("| help                              | display this list of commands                                 |\n");
  printf("| exit                              | exit the KLP                                                  |\n");
  printf("| checkstatus                       | check the status of the assignments                           |\n");
  printf("| attempt                           | attempt an assignment                                         |\n");
  printf("| requestActivation                 | used to request a teacher to activate him or her              |\n");
  printf("| viewall                           | displays assignment no and date, showing if attempted or not  |\n");
  printf("|                                   |                                                               |\n");
  printf("+---------------------------------------------------------------------------------------------------+\n");

  printf("\n");
}
