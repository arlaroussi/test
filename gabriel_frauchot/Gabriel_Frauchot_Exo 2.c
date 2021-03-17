#include<stdio.h>

main()
{
printf("\n");
printf("Facture de photocopies\n");
printf("\n");

int n ;
float p ;

printf("Entrez le nombre de photocopies demander : ");
scanf("%d", &n);
printf("\n");

  if (n <= 10) {
    p = n*0.10 ;
    printf("Facture: %.2f ", p);
	}

  else if (n <= 20) {
    n = n-10 ;
    p = n*0.09 ;
    p = p + 0.10*10 ;
    printf("Facture: %.2f ", p);
	}

  else {
    n = n-20 ;
    p = n*0.08 ;
    p = p + 0.09*10  + 0.10*10 ;
    printf("Facture: %.2f ", p);
	}

printf("\n\n");
system("pause");
}
