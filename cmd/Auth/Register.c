#include <stdio.h>
#include <stdlib.h>



struct login{
char fname[50];
char lname[50];
char userid[50];
char password[50];
};
registe()
{
FILE *fptr;
    FILE *log;
    log=fopen("login.txt","w");
    fptr = fopen("C://xampp/htdocs/kindercare/cmd/Auth/Auth.txt", "a");
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
login()
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

    fptr = fopen("C://xampp/htdocs/kindercare/cmd/Auth/Auth.txt", "a");/*  open for writing */
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

main()
{



int cho;
system("color 0b");

printf("press '1' for registe\n  press '2' for login\n\n");
scanf("%d",&cho);

if(cho==1)
  {
    system("cls");
    registe();
  }
else if(cho==2)
  {
    system("cls");
    login();
  }
}
