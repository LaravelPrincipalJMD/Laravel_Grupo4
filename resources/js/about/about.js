function mostrarPanel(num_elemento,altura){
    let lista_clases = document.getElementsByClassName("timeline-panel")[num_elemento].classList;
    if(window.scrollY>altura){
      lista_clases.add("texto-aparecer");
      lista_clases.remove("texto-desaparecer");
    }else{
      lista_clases.remove("texto-aparecer");
      lista_clases.add("texto-desaparecer");
    }
  }
  window.onscroll = function(){
    mostrarPanel(0,2200);
    mostrarPanel(1,2500);
    mostrarPanel(2,2700);
    mostrarPanel(3,3000);
  };