#include <stdio.h>
#include <stdlib.h>

#include "register.c"



struct login{
char fname[50];
char lname[50];
char userid[50];
char password[50];
};
 void login()
{
    char userid[200],password[40];
    FILE *log;
    log=fopen("login.txt","r");
    struct login l;
    printf("Enter userID: ");
    scanf("%s",&userid);

    printf("Enter password: ");
    scanf("%s",&password);

    while(fread(&l,sizeof(l),1,log))

    {
        if(strcmp(userid,l.userid)==0 && strcmp(password,l.password)==0)

        {
          printf("SUCCESSFUL LOGIN!!\n");
        }

        else
        {
            printf("PLEASE ENTER CORRECT USERID & PASSWORD!!!");
        }
    }

     FILE *fptr;
    char name[50];
    char fname[50];
char lname[50];
    int mark;

    fptr = fopen("cmd/Auth/Register/register.txt", "a");/*  open for writing */
    if (fptr == NULL)
    {
        printf("File does not exists \n");
        return;
    }
    
    
     fprintf(fptr, "%s,", userid);
     fprintf(fptr, "%s,", fname);
     fprintf(fptr, "%s,", lname);

    
  //fgetc("%d");
    fclose(fptr);
   fclose(log);
}
