import java.util.Scanner;

public class saisir_afficher{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Veuillez saisir un entier.");
                int x = input.nextInt();
                System.out.println("Vous avez saisi "+ x + ".");
        }
}
