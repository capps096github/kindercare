#include <stdio.h>
#include <stdlib.h>
#include<string.h>
#include<time.h>
int main()
{
     printf("\t***TABLE OF CONTENTS**\na.VIEWALL\nb.CHECKSTATUS\nc.VIEWASSIGNMENT\nd.CHECKDATES\ne.REQUESTACTIVATION\n\n");
    char choice[20];
     char a[20]="VIEWALL";
     char b[20]="CHECKSTATUS";
    char c[20]="VIEWASSIGNMENT";
    char d[20]="CHECKDATES";
    char e[20]="REQUESTACTIVATION";
    printf("+++ please choose a command+++");
    printf("\n\n");
    printf("ENTER CHOICE FROM TABLE:");
    scanf("%s",choice);
    if(strcmp(a,choice)==0){
//        printf(" |ASSIGNMENT_ID\t|DATE\t|ATTEMPTED\n\n");
          FILE *fp;
   char b[255];//creating char array to store data of file
   fp = fopen("C://xampp/htdocs/kindercare/web/db/assignments.txt", "r");
   while(fscanf(fp, "%s", b)!=EOF){
   printf("%s ", b );
   }
   fclose(fp);

         main();

    }
    else if(strcmp(b,choice)==0){
        printf(" |ASSIGNMENT_ID\t|ATTEMPTED\t|AVERAGE_SCORE\t|PERCENTAGE_MISSED\t|PERCENTAGE_ATTEMPTED\n\n");
        printf("~~Chosen~code @2022 #KLP~~\n\n\n\n");
         main();
    }
    else if(strcmp(c,choice)==0){
        printf(" |ASSIGNMENT_ID\t|DURATION\n\n");
        printf("~~Chosen~code @2022 #KLP~~\n\n\n\n");
         main();
    }
    else if(strcmp(d,choice)==0){
        printf(" |ASSIGNMENT_ID\t|VALID DATE\n\n");
        printf("~~Chosen~code @2022 #KLP~~\n\n\n\n");
         main();
    }
    else if(strcmp(e,choice)==0){
        printf(" ACTIVATION REQUEST SENT TO TEACHER\n\n");
        printf("~~Chosen~code @2022 #KLP~~\n\n\n\n");
         main();
    }
    else
        {
            printf("WRONG COMMAND!!!!!!!!!!!!!!!!!PLEASE TRY AGAIN!!\n\n");
            printf("~~Chosen~code @2022 #KLP~~\n\n\n\n");
        main();
    }

    return 0;
}
