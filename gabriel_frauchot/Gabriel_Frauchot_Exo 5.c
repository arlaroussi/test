int main()
{
    int i, n = 0, som = 0;
    int som_paire = 0, som_impaire = 0;

    int reste;


printf("Entrer la valeur de n: ");
scanf("%d", &n);

for(i=1; i<n+1 ; i++)
    {
        som = som + i ;
    printf("%d\n",som);

int tab[]= { som };

    reste = tab[i] % 2;

   if (reste == 0){
      som_paire = tab[i] ;
   }
   else
    {
      som_impaire = tab[i] ;

    }
    }
    printf("\n\tPaire   : %d\n",som_paire);
    printf("\n\tImpaire : %d\n",som_impaire);

}
