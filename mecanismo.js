const formulario = document.getElementById("fomulario");

const msgAlerta = document.getElementById("msgAlert");


function sumir_msg (){
    msgAlerta.style.display='none';
}

function mostra_menu(){
    var msg = window.document.querySelector('div.itens')
    msg.style.display='flex'
    msg.style.background ='#193647'
    msg.style.textAlign ='center'
    msg.style.padding = '20px'
    msg.style.position = 'absolute'
    msg.style.width='100%'
}

formulario.addEventListener("submit", async (e)=> {
    e.preventDefault();
    const dadosform =  new FormData(formulario);
    const dados =  await fetch ('cadastro.php', {
        method: "POST",
        body: dadosform,
    });

    const resposta = await dados.json();
    if (resposta['erro']){
        msgAlerta.style.textAlign = 'center';
        msgAlerta.style.padding = '10px';
        msgAlerta.style.background= '#e22f2f'
        msgAlerta.style.color = '#ffffff'
        msgAlerta.innerHTML = resposta['msg'];
        setTimeout(sumir_msg, 2000);
     }else{
        formulario.reset();
        msgAlerta.style.textAlign = 'center';
        msgAlerta.style.padding = '10px';
        msgAlerta.style.background= '#26b350'
        msgAlerta.style.color = '#ffffff'
        msgAlerta.innerHTML = resposta['msg'];
        setTimeout(sumir_msg, 2000);
     };

    

});





