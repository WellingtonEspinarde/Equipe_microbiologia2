package PastaJava.model;

public class Exames {
    private int id;
    private int idUsuario;
    private int idPaciente; 
    private String nomeExame;
    private String descricao;
    private String tipoAmostra;
    private String resultado;
    private String prioridade;

    public Exames (){}

    public Exames(int id, int idUsuario, int idPaciente, String nomeExame, String descricao, String tipoAmostra, String resultado, String prioridade) {
        this.id = id;
        this.idUsuario = idUsuario;
        this.idPaciente = idPaciente;
        this.nomeExame = nomeExame;
        this.descricao = descricao;
        this.tipoAmostra = tipoAmostra;
        this.resultado = resultado;
        this.prioridade = prioridade;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdUsuario() {
        return idUsuario;
    }

    public void setIdUsuario(int idUsuario) {
        this.idUsuario = idUsuario;
    }

    public int getIdPaciente() {
        return idPaciente;
    }

    public void setIdPaciente(int idPaciente) {
        this.idPaciente = idPaciente;
    }

    public String getNomeExame() {
        return nomeExame;
    }

    public void setNomeExame(String nomeExame) {
        this.nomeExame = nomeExame;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public String getTipoAmostra() {
        return tipoAmostra;
    }

    public void setTipoAmostra(String tipoAmostra) {
        this.tipoAmostra = tipoAmostra;
    }

    public String getResultado() {
        return resultado;
    }

    public void setResultado(String resultado) {
        this.resultado = resultado;
    }

    public String getPrioridade() {
        return prioridade;
    }

    public void setPrioridade(String prioridade) {
        this.prioridade = prioridade;
    }

    @Override
    public String toString() {
        return "Exames [id=" + id + ", idUsuario=" + idUsuario + ", idPaciente=" + idPaciente + ", nomeExame=" + nomeExame + ", descricao=" + descricao + ", tipoAmostra=" + tipoAmostra + ", resultado=" + resultado + ", prioridade=" + prioridade + "]";
    }

}
