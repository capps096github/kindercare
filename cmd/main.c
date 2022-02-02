#include <stdio.h>
#include <stdlib.h>

// include a list of all files we need to include in the project

// get the help file
#include "help.c"

// get the commands file
#include "commands.c"

// Starting point of the Kindercare Learning Platform (KLP) CMD-INTERFACE
int main()
{

    printf("\n\n");
    printf("+---------------------------------------- KINDERCARE LEARNING PLATFORM (KLP) - COMMAND LINE INTERFACE ----------------------------------------+\n\n\n");

    // welcome text
    printf("WELCOME TO THE KLP - COMMAND LINE INTERFACE\n\nHERE's SOME HELP FOR YOU :");

    // call the help function
    cmdHelp();

    // call the commands function
    klpCommands();

    return 0;
}
