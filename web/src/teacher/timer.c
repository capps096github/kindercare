#include <stdio.h>
#include <stdlib.h>

int main()
{
    int iCounter;

    printf("\n Enter a value for the counter\n");
    scanf("%d",&iCounter);

    while(iCounter !=0)
    {
        printf("\n\n\n\t %d", iCounter);
        iCounter--;
        sleep(1);
        system(clear);
    }
    printf("\n Your time has expired\n")
    return 0;
}
