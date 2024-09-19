function validaCampo(){
    filme = document.form1.filme.value;
    if(filme == "" || filme.indexOf(" ") != -1){

       window.alert("Preencha o campo com caracteres válidos");
       document.form1.filme.focus();
       return false;
    }
    else {
      return true;

    }
   }
   function validaCampo(){
    genero = document.form1.genero.value;
    if(genero == "" || genero.indexOf(" ") != -1){

       window.alert("Preencha o campo com caracteres válidos");
       document.form1.genero.focus();
       return false;
    }
    else {
      return true;

    }
   }
   function validaCampo(){
    produtora = document.form1.produtora.value;
    if(produtora == "" || produtora.indexOf(" ") != -1){

       window.alert("Preencha o campo com caracteres válidos");
       document.form1.produtora.focus();
       return false;
    }
    else {
      return true;

    }
   }