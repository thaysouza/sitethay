function exibir_categoria(categoria){
 
    let elementos = document.getElementsByClassName("box_produto");
    console.log(elementos);
    for (var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
  
        if(categoria == elementos[i].id)
        elementos[i].style="display:inline-block";
        else  
          elementos[i].style = "display:none";
    }
  
  }
  
  let exibir_todos = () => {
      let elementos = document.getElementsByClassName("box_produto");
  
      for (var i=0; i<elementos.length; i++){
          console.log(elementos[i].id);
    
          elementos[i].style="display:inline-block";
       
      }
  
  };
  

 let destaque = (imagem) => {
      console.log(imagem);
      if(imagem.width == 180 )
         imagem.width =220;
        
      else
      imagem.width = 180;
      
  }