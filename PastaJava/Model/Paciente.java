package PastaJava.model;

public class Paciente extends Pessoa {

    private String dataNascimento; //  import java.time.LocalDate;   private LocalDate dataNascimento;
    private String telContato;
    private String emailContato;
    private String nomeMae;
    private String endereco;
    private String remedioContinuo;
    private String qualRemedio;
    private String patologia;
    private String qualPatologia;
    private String tecResponsavel;
    private String horarioTec;

    private String exames;
    private String resultados;
    private String historicoMedico;
    private String alunoResponsavel;

    public Paciente (){}

    public Paciente(String nome, int id, String cpf, String dataNascimento, String telContato, String emailContato,
            String nomeMae, String endereco, String remedioContinuo, String qualRemedio, String patologia,
            String qualPatologia, String tecResponsavel, String horarioTec, String exames,
            String resultados, String historicoMedico, String alunoResponsavel) {
        super(nome, id, cpf);
        this.dataNascimento = dataNascimento;
        this.telContato = telContato;
        this.emailContato = emailContato;
        this.nomeMae = nomeMae;
        this.endereco = endereco;
        this.remedioContinuo = remedioContinuo;
        this.qualRemedio = qualRemedio;
        this.patologia = patologia;
        this.qualPatologia = qualPatologia;
        this.tecResponsavel = tecResponsavel;
        this.horarioTec = horarioTec;
        this.exames = exames;
        this.resultados = resultados;
        this.historicoMedico = historicoMedico;
        this.alunoResponsavel = alunoResponsavel;
    }

    public String getDataNascimento() {
        return dataNascimento;
    }

    public void setDataNascimento(String dataNascimento) {
        this.dataNascimento = dataNascimento;
    }

    public String getTelContato() {
        return telContato;
    }

    public void setTelContato(String telContato) {
        this.telContato = telContato;
    }

    public String getEmailContato() {
        return emailContato;
    }

    public void setEmailContato(String emailContato) {
        this.emailContato = emailContato;
    }

    public String getNomeMae() {
        return nomeMae;
    }

    public void setNomeMae(String nomeMae) {
        this.nomeMae = nomeMae;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public String getRemedioContinuo() {
        return remedioContinuo;
    }

    public void setRemedioContinuo(String remedioContinuo) {
        this.remedioContinuo = remedioContinuo;
    }

    public String getQualRemedio() {
        return qualRemedio;
    }

    public void setQualRemedio(String qualRemedio) {
        this.qualRemedio = qualRemedio;
    }

    public String getPatologia() {
        return patologia;
    }

    public void setPatologia(String patologia) {
        this.patologia = patologia;
    }

    public String getQualPatologia() {
        return qualPatologia;
    }

    public void setQualPatologia(String qualPatologia) {
        this.qualPatologia = qualPatologia;
    }

    public String getTecResponsavel() {
        return tecResponsavel;
    }

    public void setTecResponsavel(String tecResponsavel) {
        this.tecResponsavel = tecResponsavel;
    }

    public String getHorarioTec() {
        return horarioTec;
    }

    public void setHorarioTec(String horarioTec) {
        this.horarioTec = horarioTec;
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
        return "Paciente [dataNascimento=" + dataNascimento + ", telContato=" + telContato + ", emailContato="
                + emailContato + ", nomeMae=" + nomeMae + ", endereco=" + endereco + ", remedioContinuo="
                + remedioContinuo + ", qualRemedio=" + qualRemedio + ", patologia=" + patologia + ", qualPatologia="
                + qualPatologia + ", tecResponsavel=" + tecResponsavel + ", horarioTec=" + horarioTec + ", exames="
                + exames + ", resultados=" + resultados + ", historicoMedico=" + historicoMedico + ", alunoResponsavel="
                + alunoResponsavel + "]";
    }
    
}
