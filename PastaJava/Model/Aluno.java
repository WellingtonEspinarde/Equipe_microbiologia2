public class Aluno extends UsuarioSistema {
    private String curso;
    private String anoLetivo;

    public Aluno() {}

    public Aluno(String nome, int id, String cpf, String email, String senha, String curso, String anoLetivo) {
        super(nome, id, cpf, email, senha);
        this.curso = curso;
        this.anoLetivo = anoLetivo;
    }

    public String getCurso() {
        return curso;
    }

    public void setCurso(String curso) {
        this.curso = curso;
    }

    public String getAnoLetivo() {
        return anoLetivo;
    }

    public void setAnoLetivo(String anoLetivo) {
        this.anoLetivo = anoLetivo;
    }

    @Override
    public String toString() {
        return super.toString() + " Aluno [curso=" + curso + ", anoLetivo=" + anoLetivo + "]";
    }
}
