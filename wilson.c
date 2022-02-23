#include <stdio.h>
#include <stdlib.h>
#include <time.h>
int main(){
int firstnum,secnum;
int n1,n2,x,y;
time_t t;

printf("Enter first number between (0-100) : ");
jump1:
scanf("%d",&firstnum);
if(firstnum<0  firstnum>100){
    printf("Entry 1 exceeds the range! Please try again : ");
    goto jump1;
}
else{
    printf("Enter second number between (0-100) : ");
    jump2:
    scanf("%d",&secnum);
    if(secnum<0  secnum>100){
        printf("Entry 2 exceeds the range! Please try again : ");
        goto jump2;
    }
}


srand(n1+rand()%(n2-n1));
printf("\nWhat is %d + %d ? = ",n1,n2);
scanf("%d",&x);
if(x==n1+rand()%(n2-n1)){
    printf("Correct guess!");
}
else{
    for(y=1;y<4;y++){
         printf("Wrong! Guess again %d : &d",y,x);
    }

}

return 0;
}