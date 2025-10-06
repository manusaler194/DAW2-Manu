const mostrarTabla = (event) => {
    event.preventDefault();
    const numero = Number(document.getElementById('numero').value);

    if (numero >= 0 && numero <= 10) {
        let tabla = document.getElementById('identiad_virtual');
        let tablaMultiplicar = `<h2>Tabla de multiplicar del número ${numero}</h2>`;
        tablaMultiplicar += '<ul>';

        for (let i = 0; i <= 10; i++) {
            tablaMultiplicar += `<li>${numero} * ${i} = ${numero * i}</li>`;
        }

        tablaMultiplicar += '</ul>';
        tabla.innerHTML = tablaMultiplicar;

    } else {
        alert('El número introducido debe estar entre 0 y 10 (ambos inclusive');
        document.getElementById("numero").value = '';
    }
}
const mostrarTablaDividir =(event) => {
    event.preventDefault();
    const numero = Number(document.getElementById('numero2').value);

    if (numero>= 0 && numero <=10) {
        let tabla = document.getElementById('identidad_virtual2');
        let tablaDividir = `<h2>Tabla de dividir del número ${numero}</h2>`;
        tablaDividir +='<ul>';
        for (let i=0;i<=numero;i++){
            tablaDividir += `<li>${numero} / ${i} = ${numero / i}</li>`;
        }
        tablaDividir +='</ul>';
        tabla.innerHTML = tablaDividir;

    }
}