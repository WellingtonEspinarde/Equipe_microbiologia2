package PastaJava.views;

import java.util.Scanner;

import PastaJava.dao.PacienteDao;
import PastaJava.model.Paciente;
import PastaJava.model.Professor;






public class Menu {
     public static void main(String[] args) {
       Scanner scan = new Scanner(System.in);
       int opcao = 0;

       do{
        System.out.println("digite: \n");
        System.out.println("1-pacientes");
        System.out.println("2-professor");
        System.out.println("3-aluno");
        System.out.println("3-exame");
        opcao=scan.nextInt();
        scan.nextLine();

        switch (opcao) {
            case 1:

            case 2:

            case 3:

            case 0:
                System.out.println("Saindo...");
            break;

            default:
                System.out.println("opção invalida");
                break;
        }
       }while(opcao!=0);
       scan.close();
     }
    
}
