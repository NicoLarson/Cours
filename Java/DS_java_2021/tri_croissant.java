import java.util.Scanner;

public class tri_croissant{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Saissisez deux entier.");
                int x = input.nextInt();
                int y = input.nextInt();
                if(x>y){
                        System.out.println(y +"  " + x);
                }        else{

                        System.out.println(x +"  "+ y);
                }
        }
}
