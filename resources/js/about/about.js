const mostrarPanel = (num_elemento,altura) => {
    let lista_clases = document.getElementsByClassName("timeline-panel")[num_elemento].classList;
    if(window.scrollY>altura){
      lista_clases.add("texto-aparecer");
      lista_clases.remove("texto-desaparecer");
    }else{
      lista_clases.remove("texto-aparecer");
      lista_clases.add("texto-desaparecer");
    }
  }
  window.onscroll = () => {
    mostrarPanel(0,20);
    mostrarPanel(1,700);
    mostrarPanel(2,700);
    mostrarPanel(3,700);
    mostrarPanel(4,700);
    mostrarPanel(5,700);
    mostrarPanel(6,700);
    mostrarPanel(7,2200);
    mostrarPanel(8,2500);
    mostrarPanel(9,2700);
    mostrarPanel(10,3000);
  };