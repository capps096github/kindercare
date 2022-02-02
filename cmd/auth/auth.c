#include <stdio.h>
#include <stdlib.h>
#include "register.c"
#include "login.c"
int main()
{



int cho;
system("color 0b");

printf("press '1' for register\n  press '2' for login\n\n");
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
  return 0;
}