import java.util.Scanner;

public class alphabet{
        public static void main(String[] arg){
                Scanner input = new Scanner (System.in);
                System.out.println("Saisissez un nombre a.");
                int a = input.nextInt();
                System.out.println("Saisissez un nombre b.");
                int b = input.nextInt();

                if(a<b){
                        for(int i = a;i<=b;i++){
                                System.out.println((char)i);
                        }
                }else{
                        for(int i = b;i<=a;i++){
                                System.out.println((char)i);
                        }
                }

        }

}


