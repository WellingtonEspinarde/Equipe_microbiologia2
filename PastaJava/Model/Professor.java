package PastaJava.model;

public class Professor extends UsuarioSistema {
    public Professor() {}

    public Professor(String nome, int id, String cpf, String email, String senha) {
        super(nome, id, cpf, email, senha);
    }

    @Override
    public String toString() {
        return super.toString() + " Professor: " ;
    }
}
