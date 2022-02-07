#include <stdio.h>
#include <stdlib.h>

void viewallassignments()
{
    char *filename = "../db/assignments.txt";
    FILE *fp = fopen(filename, "r");

    if (fp == NULL)
    {
        printf("Error: could not open file %s", filename);
        exit(1);
    }

    // reading
    const unsigned MAX_LENGTH = 256;
    char buffer[MAX_LENGTH];

    while (fgets(buffer, MAX_LENGTH, fp))
        printf("%s", buffer);

    // closing the file
    fclose(fp);
}
