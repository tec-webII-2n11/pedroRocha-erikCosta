//Função do Formulário//
function validacao() {
"use strict";
//Validação do NOME//
if (document.form.nome.value === "") {
alert("Por favor preencha o campo NOME");
document.form.nome.focus();
return false;
}
//Validação do SOBRENOME//
if (document.form.sobrenome.value === "") {
alert("Por favor preencha o campo SOBRENOME");
document.form.sobrenome.focus();
return false;
}
//Validação da CIDADE//
if (document.form.cidade.value === "") {
alert("Por favor preencha o campo CIDADE");
document.form.cidade.focus();
return false;
}
//Validação do ESTADO//
if (document.form.estado.value === "") {
alert("Por favor preencha o campo ESTADO");
document.form.estado.focus();
return false;
}
//Validação do E-Mail//
if (document.form.email.value === "" || document.form.email.value.indexOf('@') === -1 || document.form.email.value.indexOf('.') === -1) {
alert("Por favor digite um endereço de E-MAIL válido");
document.form.email.focus();
return false;
}
//Agradecimento//
if (document.form.email.value !== "") {
alert("MENSAGEM ENVIADA COM SUCESSO");
document.form.email.focus();
}
}