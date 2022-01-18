(function(){
    var actualizarHora = function (){
        var fecha = new Date(),
            horas = fecha.getHours(),
            minutos = fecha.getMinutes(),
            segundos = fecha.getSeconds(),
            diaSemana = fecha.getDay(),
            dia = fecha.getDate(),
            mes = fecha.getMonth(),
            year = fecha.getFullYear();

        var pHoras = document.getElementById('horas'),
            pAMPM = document.getElementById('ampm'),
            pMinutos = document.getElementById('minutos'),
            pSegundos = document.getElementById('segundos'),
            pDiaSemana = document.getElementById('diaSemana'),
            pDia = document.getElementById('dia'),
            pMes = document.getElementById('mes'),
            pYear = document.getElementById('year'),
            curso1 = document.getElementById('curso1'),
            curso2 = document.getElementById('curso2'),
            curso3 = document.getElementById('curso3');
        
        var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles','Jueves','Viernes','Sabado'];
        pDiaSemana.textContent = semana[diaSemana];
        pDia.textContent = dia;
        var meses = ['Enero','Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];
        pMes.textContent = meses[mes];
        pYear.textContent = year;

        if (horas > 12) {
            horas = horas - 12;
            ampm= 'PM';
        }else{
            ampm = 'AM';
        }
        if(horas == 12){ampm= 'PM'};
        if (minutos < 10) {minutos = '0'+minutos;}
        if (segundos < 10) {segundos = '0'+segundos;}
        pHoras.textContent = horas;
        pAMPM.textContent = ampm;
        pMinutos.textContent = minutos;
        pSegundos.textContent = segundos;

        var horario = {"Lunes":['Lenguaje','Geometría','Raz.Verbal'],"Martes":['Psicotécnico','Química 1','Física 1'],"Miercoles":['Raz.Matemático','Física 2','Trigonometría'],"Jueves":['Química 2','Física 3', 'Química 3'],"Viernes":['Aritmética','Álgebra','Matemática 1']};
        curso1.textContent = horario[semana[diaSemana]][0];
        curso2.textContent = horario[semana[diaSemana]][1];
        curso3.textContent = horario[semana[diaSemana]][2];   

    };
    var actualizarCurso = function(){
        
        

        
        if(diaSemana >0 && diaSemana < 6){
            //dibujamos los cursos
            curso1.textContent = horario[semana[diaSemana]][0];
            curso2.textContent = horario[semana[diaSemana]][1];
            curso3.textContent = horario[semana[diaSemana]][2];         
        }

    }
    actualizarHora();
    actualizarCurso();
    var intervalo = setInterval(actualizarHora,1000);
    var intervalo2 = setInterval(actualizarCurso,1000*60*60*6); // cada 6 horas
}())

