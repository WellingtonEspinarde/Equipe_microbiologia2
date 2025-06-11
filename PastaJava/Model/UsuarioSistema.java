public abstract class UsuarioSistema extends Pessoa { 
    private String email;
    private String senha;

    public UsuarioSistema() {}

    public UsuarioSistema(String nome, int id, String cpf, String email, String senha) {
        super(nome, id, cpf);
        this.email = email;
        this.senha = senha;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    @Override
    public String toString() {
        return super.toString() + " [Email=" + email + ", Senha=****]";
    }
}
