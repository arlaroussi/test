#include <stdio.h>

int main()
{
    int i, n = 0, som = 0;

printf("Entrer la valeur de n: ");
scanf("%d", &n);

for(i=1; i<n+1 ; i++)
    {
        som = som + i ;
    printf("%d\n",som);
    }
}
