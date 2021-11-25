var buttonNovoEvento = document.getElementById('buttonNovoEvento');
var buttonCancelar = document.getElementById('buttonCancelar');
var novoEvento = document.getElementById("novoEvento");
var formNovoEvento = document.getElementById("formNovoEvento");
var inputNomeEvento = document.getElementById('nomeEvento');
var inputDataEvento = document.getElementById('dataEvento');
var divMenssagemErro = document.getElementById('mesErro');
var tabelaEventos = document.getElementById('tabelaEventos');


var listaEventos = [];

function removerEvento(event){
    console.log('remover Evento')
    var posicao = event.target.getAttribute('data-evento')
    listaEventos.splice(posicao, 1);
    atualizarTabelaEventos();
}

function atualizarTabelaEventos(){
    if(listaEventos.length === 0){
        tabelaEventos.innerHTML = '<tr><td colspan="3">Nenhum evento</td></tr>';
        return;
    }
    tabelaEventos.innerHTML = '';

    for(var i = 0; i < listaEventos.length; i++) {
        var evento = listaEventos[i];
        var linha = document.createElement('tr');
        var celulaNome = document.createElement('td');
        var celulaData = document.createElement('td');
        var celulaAcoes = document.createElement('td');
        var botaoExcluir = document.createElement('button');
        celulaNome.innerText = evento.nome;
        celulaData.innerText = evento.data;
        botaoExcluir.innerText = 'Remover';
        celulaAcoes.appendChild(botaoExcluir);
        botaoExcluir.classList.add('btn')
        botaoExcluir.classList.add('btn-danger')
        botaoExcluir.classList.add('btn-sm')
        botaoExcluir.addEventListener('click', removerEvento)
        botaoExcluir.setAttribute('data-evento', i)
        linha.appendChild(celulaNome); //insere no final da linha
        linha.appendChild(celulaData);
        linha.appendChild(celulaAcoes);
        tabelaEventos.appendChild(linha);
    }
}

function limparNovoEvento(){
     inputNomeEvento.value = '';
     inputDataEvento.value = '';
     inputNomeEvento.classList.remove("is-invalid");
     inputDataEvento.classList.remove("is-invalid");
     divMenssagemErro.classList.add("d-none");
     divMenssagemErro.innerHTML = '';
}


function mostarNovoEvento() {
    novoEvento.classList.remove("d-none");
}

function cancelar() {
    novoEvento.classList.add("d-none");
    limparNovoEvento();
}

function novoEventoValido(nomeEvento, dataEvento) {
    var validacaoOk = true;
    var erro = '';
    if (nomeEvento.trim().length === 0) {
        erro = 'O nome do evento é obrigatório';
        inputNomeEvento.classList.add("is-invalid");
        validacaoOk = false;
    } else {
        inputNomeEvento.classList.remove("is-invalid");
    }
    var timeestampEvento = Date.parse(dataEvento);
    var timeestampAtual = (new Date()).getTime();
    if (isNaN(timeestampEvento) || timeestampEvento < timeestampAtual) {
        if (erro.length > 0) {
            erro += ',<br>'
        }
        erro += 'A data do evento é obrigatória e deve estar no futuro';
        inputDataEvento.classList.add("is-invalid");
        validacaoOk = false;
    } else {
        inputDataEvento.classList.remove("is-invalid");
    }

    if (!validacaoOk) {
        divMenssagemErro.innerHTML = erro;
        divMenssagemErro.classList.remove("d-none");
    }
    else {
        divMenssagemErro.classList.add("d-none");
    }

    return validacaoOk;
}

function salvarNovoEvento(event) {
    event.preventDefault();
    var nomeEvento = inputNomeEvento.value;
    var dataEvento = inputDataEvento.value;
    if (novoEventoValido(nomeEvento, dataEvento)) {
        console.log("Evento é valido");
        listaEventos.push({
            nome: nomeEvento,
            data: new Date(dataEvento),
        });
        atualizarTabelaEventos();
        cancelar()

    } else {
        console.log("Evento inválido");
    }
}

buttonNovoEvento.addEventListener("click", mostarNovoEvento);
buttonCancelar.addEventListener("click", cancelar);
formNovoEvento.addEventListener("submit", salvarNovoEvento);
window.addEventListener('load', atualizarTabelaEventos) //o comando load é quando a pagina é carregada 
