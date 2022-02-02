#include <stdio.h>
#include <stdlib.h>



struct login{
char fname[50];
char lname[50];
char userid[50];
char password[50];
};
void registe()
{
FILE *fptr;
    FILE *log;
    log=fopen("login.txt","w");
    fptr = fopen("cmd/auth/register/register.txt", "a");
    struct login l;


    printf("Enter the first name: ");
    scanf("%s", l.fname);

    printf("Enter the last name: ");
    scanf("%s", l.lname);

    printf("Enter the  userid: ");
    scanf("%s", l.userid);

    printf("Enter the password: ");
    scanf("%s", l.password);

    fwrite(&l, sizeof(l),1,log);
    fwrite(&l, sizeof(l),1,fptr);
     fclose(fptr);

    fclose(log);

    printf("\n\n your username is your \n");
    printf("Now login with your UserID and Password\n");
    printf("\n Press any key to continue......");
    getch();
    system("cls");
    //  login();

}

