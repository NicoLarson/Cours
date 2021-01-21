import java.util.Scanner;

public class triangle{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Saisissez un entier positif.");
                int n = input.nextInt();
                if(n<0){

                }else{
                        for(int i = 0; i<n;i++){
                                for(int j = 0; j<=i; j++){

                                        System.out.print("a");
                                }

                                System.out.println("");
                        }
                        for(int x = n; x>0;x--){
                                for(int y = x-1; y>0; y--){
                                        System.out.print("a");
                                }

                                System.out.println("");
                        }


                }

        }
}


