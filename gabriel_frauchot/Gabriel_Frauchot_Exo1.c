#include <stdio.h>

int main() {

float X1,X2,delta,a,b,c;
printf("\n");
printf("entrez les valeurs des : a\n" );
    scanf("%f",&a);
printf("\n");
printf("entrez les valeurs des : b\n" );
    scanf("%f",&b);
printf("\n");
printf("entrez les valeurs des : c\n" );
    scanf("%f",&c);


delta=(b*b)-(4*a*c);

if (delta==0.0){
    X1 =(-b/(2*a));
    printf("\n");
    printf("la solution unique est : %.2f\n",X1);
    }
if (delta>0.0){
    X1=((-b-sqrt(delta))/(2*a));
    X2=((-b+sqrt(delta))/(2*a));
    printf("\n");
    printf("les deux racines sont : X1 =%.2f ",X1);
    printf("\nEt : X2 =%.2f ",X2);

    }
if (delta<0.0){
    printf("l'equation na pas de solution\n");
}
printf("\n\n");
return 0;
}
