let pedidos=[];

//Area de Texto.

tinymce.init({
    selector: '#textito',
    height: 250,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  });


  //Funcionalidad Boton Agregar y validacion

  document.querySelector("#btn_agregar").addEventListener("click",()=>{

    let bool=false;
    let nombre_cliente=document.querySelector("#nom-cliente").value;
    let tipo_pedido=document.querySelector("#tipo-pedido").value;
    let cantidad=document.querySelector("#total-pedido").value;
    let descripcion=tinymce.get("textito").getContent();


    });
    