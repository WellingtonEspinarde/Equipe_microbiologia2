public class Paciente extends Pessoa {
    private String exames;
    private String resultados;
    private String historicoMedico;
    private String alunoResponsavel;

    public Paciente (){}
   
    public Paciente(String nome, int id, String cpf, String exames, String resultados, String historicoMedico, String alunoResponsavel) {
        super(nome, id, cpf);
        this.exames = exames;
        this.resultados = resultados;
        this.historicoMedico = historicoMedico;
        this.alunoResponsavel = alunoResponsavel;
    }

    public String getExames() {
        return exames;
    }

    public void setExames(String exames) {
        this.exames = exames;
    }

    public String getResultados() {
        return resultados;
    }

    public void setResultados(String resultados) {
        this.resultados = resultados;
    }

    public String getHistoricoMedico() {
        return historicoMedico;
    }

    public void setHistoricoMedico(String historicoMedico) {
        this.historicoMedico = historicoMedico;
    }

    public String getAlunoResponsavel() {
        return alunoResponsavel;
    }

    public void setAlunoResponsavel(String alunoResponsavel) {
        this.alunoResponsavel = alunoResponsavel;
    }

    @Override
    public String toString() {
        return super.toString() + " Paciente [exames=" + exames + ", resultados=" + resultados + ", historicoMedico=" + historicoMedico + ", alunoResponsavel=" + alunoResponsavel + "]";
    }

}
