
function salario(salario,tiempo){
    let total=0;
    salario=parseFloat(salario);    
    total=salario*tiempo;
    return total;
}

$(document).ready(function () {
    const selectCalculo = document.querySelector("#salario");
    selectCalculo.addEventListener("change", (event) => {
        let select = event.target.value;
        let salario_diario = $("#salario_diario").val();   
        let cantidad_total=select == 'semanal' ? salario(salario_diario,7) : select == 'quincenal' ? salario(salario_diario,15): select == 'mensual' ? salario(salario_diario,30): 0;

        
        document.getElementById("salario_total").innerHTML=`Cantidad: ${cantidad_total}`;
     
    });
});
