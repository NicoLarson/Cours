import java.util.Scanner;

public class saisie{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Saissisez un nombre entier.");
                        int n = input.nextInt();
                        System.out.println(n + 1);
        }
}
