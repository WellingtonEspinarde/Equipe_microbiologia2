package PastaJava.Controller;


import java.util.ArrayList;
import java.util.Scanner;

public class AlunoController {
    private ArrayList<AlunoController> alunos = new ArrayList<>();
    private Scanner scanner = new Scanner(System.in);

    public void cadastrarAluno() {
        System.out.print("Nome: ");
        String nome = scanner.nextLine();
        /*System.out.print("ID: ");
        int id = scanner.nextInt(); scanner.nextLine();*/
        System.out.print("CPF: ");
        String cpf = scanner.nextLine();
        System.out.print("Email: ");
        String email = scanner.nextLine();
        System.out.print("Senha: ");
        String senha = scanner.nextLine();
        System.out.print("Curso: ");
        String curso = scanner.nextLine();
        System.out.print("Ano Letivo: ");
        String anoLetivo = scanner.nextLine();

        AlunoController aluno = new AlunoController ();
        alunos.add(aluno);
        System.out.println("Aluno cadastrado com sucesso!");
    }

    public void listarAlunos() {
        System.out.println("\n--- Lista de Alunos ---");
        for (AlunoController a : alunos) {
            System.out.println(a);
        }
    }
    
}
