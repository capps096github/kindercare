#include <stdio.h>

void viewallassignments()
{
    char *filename = "C://xampp/htdocs/kindercare/db/assignments.txt";
    FILE *fp = fopen(filename, "r");

    if (fp == NULL)
    {
        printf("Error: could not open file %s", filename);
        return 1;
    }

    // reading 
    const unsigned MAX_LENGTH = 256;
    char buffer[MAX_LENGTH];

    while (fgets(buffer, MAX_LENGTH, fp))
        printf("%s", buffer);

    // closing the file
    fclose(fp);

   
}


