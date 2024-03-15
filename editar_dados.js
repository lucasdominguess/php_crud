// function Cadastrar(key) { 
   
//     // $("#myModal").show(1000)
//     $("#title-cad").text('Cadastrar')
//     // limparCampos() 
//   }
  //Criando Modal & dados para alterar/cadastrar na table
function createModal(key) {
    let keys = Object.keys(key)
    // console.log(keys)

    $('#title_h3').text('Editar Cadastro')

// valores nos Inputs
    let values = Object.values(key) 
   
      $("#id").val(values[0])
      $("#nome").val(values[1])
      $("#data").val(values[2])

};


// buscar para Editar item com mesmo id do botao 
async function btn_editar(key) { 
   
    let id = key.target.id
    let response = await fetch(`http://localhost:9000/buscar.php?id=${id}`);
    let obj = await response.json()
    // console.log(obj)
    
    
    createModal(obj);
}

// // Eventos de botoes
  
$('#btn_cadastrar').on('click', async ()=> {
    let v_form = new FormData(document.getElementById('form_cad')) 

    enviar(v_form)
  })


// $("#enviar").click(function(){
//     let v_form = new FormData(document.getElementById('form_edit')) 
//    enviar(v_form); 
  
// });
// // botoes modal 
// $("#fechar").click(function(){
//     $("#myModal2").hide();
//     // sair();
// }) 
// $("#btn_close").click(function(){
//     $("#myModal2").hide();
//     // sair();
// })