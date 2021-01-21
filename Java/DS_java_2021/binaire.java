import java.util.Scanner;

public class binaire{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Saisissez un nombre entier non nul.");
                int n = input.nextInt();
                int bin[] = new int[n];
                int x = n;
                if(n<=0){
                        System.out.println("Veuillez saisir un nombre entier non nul.");
                }else{
                        for (int i = 0; i<n; i++){
                                bin[i]=x%2;
                                x/=2;
                        }
                        for(int i = 0; i<bin.length; i++){
                                x+= bin[i];
                        }

                        System.out.println(x);

                }

        }
}

