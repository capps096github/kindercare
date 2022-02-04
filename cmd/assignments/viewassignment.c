#include <stdio.h>

int assignmentid;
char startdate[20];
char starttime[20];
char endtime[20];

void viewAssignment ()
{
printf("\n\nPlease enter the assignmentID to view the details of the assignment\n\n");
 // capture assignmentId
  printf("ASSIGNMENT ID: ");
  scanf("%d", &assignmentid);


printf("\n\n+----------------------------------------------------------------------------+\n");
printf("|ASSIGNMENT ID                     |%d                                          \n",assignmentid);
printf("+-------------------------------------------------------------------------------+\n");
printf("|NO OF CHARACTERS                  |                                            \n");
printf("+-------------------------------------------------------------------------------+\n");
printf("|START DATE                        |                                            \n");
printf("+-------------------------------------------------------------------------------+\n");
printf("|START TIME                        |                                            \n");
printf("+-------------------------------------------------------------------------------+\n");
printf("|END TIME                          |                                            \n");
printf("+-------------------------------------------------------------------------------+\n");

printf("\n");
}

