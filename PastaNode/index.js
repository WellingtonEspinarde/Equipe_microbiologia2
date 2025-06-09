const express = require("express");
const bodyParser = require("body-parser");
const app = express();

app.use(bodyParser.json());

app.use(bodyParser.urlencoded({extended: true}));


app.set("view engine", "ejs");


app.get("/", (req, res) => {
    res.send("Página inicial");
})

app.get("/pessoa", (req, res) => {
    res.send("Listagem de pessoa.");
})


app.get("/paciente", (req, res) =>{
    res.render("formCadastro");
})


app.post("/paciente", (req, res) => {
    const {nome, cpf, resultado,historicoMedico,alunoResposavel} = req.body;

    console.log("Nome: " + nome + " CPF:" + cpf + "Resultado: " + resultado + "Historico" + historicoMedico + "Aluno Responsavel" + alunoResposavel);
    res.send("Paciente inserido com sucesso!");
})


app.get("/editarpaciente/:idpaciente", (req, res) => {
    const codigoPaciente = req.params.idcliente;
    console.log("Editando o paciente: ", codigoPaciente);
    res.send("Editando a paciente: " + codigoPaciente);
})


app.put("/paciente", (req, res) => {
    const {nome, cpf, resultado,historicoMedico,alunoResposavel} = req.body;
    
    res.send("Paciente atualizado com sucesso");
})


app.delete("/paciente/:idpaciente", (req, res) => {
    const codigoPaciente = req.params.idcliente;
   
    res.send("Paciente removido com sucesso!");
})

app.get("/fornecedores", (req, res) => {
    res.end("<html><head><title>Listagem de fornecedores</title></head><body><h3>Página de Listagem de Fornecedores</h3><h5>Lista abaixo</h5></body></html>");
})

app.listen(3000, () => {
    console.log("Servidor rodando na porta 3000");
})