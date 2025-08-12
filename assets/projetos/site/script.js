/* scroll home */
window.addEventListener('scroll', function(){
    var header = document.querySelector('.header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

function scrollWin0() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}

function scrollWin() {
    window.scrollTo({
        top: 1430,  // ajuste da posição vertical
        left: 0,    // posição horizontal
        behavior: 'smooth'  // Scroll suave
    });
}

function scrollWin2() {
    window.scrollTo({
        top: 2150,
        left: 0,
        behavior: 'smooth'
    });
}

function scrollWin3() {
    window.scrollTo({
        top: 2950,
        left: 0,
        behavior: 'smooth'
    });
}

function scrollWin4() {
    window.scrollTo({
        top: 4250,
        left: 0,
        behavior: 'smooth'
    });
}

function sopas() {
    window.scrollTo({
        top: 30,
        left: 0,
        behavior: 'smooth'
    });
}

function sushi() {
    window.scrollTo({
        top: 1250,
        left: 0,
        behavior: 'smooth'
    });
}
function temakis() {
    window.scrollTo({
        top: 2850,
        left: 0,
        behavior: 'smooth'
    });
}
function sobremesas() {
    window.scrollTo({
        top: 4050,
        left: 0,
        behavior: 'smooth'
    });
}
function bebidas() {
    window.scrollTo({
        top: 5000,
        left: 0,
        behavior: 'smooth'
    });
}

/* forms */
function validarFormulario() {
    const dataReserva = document.getElementById('data_reserva').value;
    const hoje = new Date().toISOString().split("T")[0];

    if (dataReserva < hoje) {
        alert("Por favor, selecione uma data válida no futuro.");
        return false;
    }

    alert("Reserva enviada com sucesso! Entraremos em contato.");
    return true;
}

document.getElementById('cpf').addEventListener('input', function (e) {
    let valor = e.target.value.replace(/\D/g, '');
    if (valor.length > 11) valor = valor.slice(0, 11);
    e.target.value = valor.replace(/(\d{3})(\d{3})(\d{3})(\d{0,2})/, function (_, p1, p2, p3, p4) {
        return `${p1}.${p2}.${p3}-${p4}`;
    });
});

document.getElementById('telefone').addEventListener('input', function (e) {
    let valor = e.target.value.replace(/\D/g, '');
    if (valor.length > 11) valor = valor.slice(0, 11);
    e.target.value = valor.replace(/(\d{2})(\d{5})(\d{0,4})/, function (_, p1, p2, p3) {
        return `(${p1}) ${p2}-${p3}`;
    });
});

const box = document.getElementById("box")
    const box1 = document.getElementById("box1")
    const borrar = document.getElementById("tudo")


    const boxs = [box, box1]
    boxs.forEach((bx) => {

        bx.addEventListener("mouseenter", () => {
            borrar.classList.add("borrar");
        });

        bx.addEventListener("mouseleave", () => {
            borrar.classList.remove("borrar")
        })

    })

    let currentStep = 0;
    const steps = document.querySelectorAll(".form-step");
    
    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle("active", i === index);
        });
    }
    
    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }
    
    function prevStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    }
    
    document.addEventListener("DOMContentLoaded", () => {
        showStep(currentStep);
    });

        // Script para o carrossel de Rodízios
    const botaoPro = document.getElementById("botaoProximo")
    const botaoVol = document.getElementById("botaoVoltar")
    const prato = document.querySelectorAll(".prato")

    let contador = 0;
    const tempoTransicao = 3700;
    let intervalo = setInterval(proximaImagem, tempoTransicao);

    document.querySelector(".carrossel").addEventListener("mouseover", () => {
        clearInterval(intervalo);
    });

    document.querySelector(".carrossel").addEventListener("mouseout", () => {
        intervalo = setInterval(proximaImagem, tempoTransicao);
    });

    function esconderImagem() {
        prato.forEach(item => item.classList.remove('on'))
    }

    function aparecerImagem() {
        prato[contador].classList.add('on')
    }

    function proximaImagem() {
        esconderImagem()
        contador = (contador + 1) % prato.length
        aparecerImagem()
    }

    function voltarImagem() {
        esconderImagem()
        contador = (contador - 1 + prato.length) % prato.length
        aparecerImagem()
    }

    botaoPro.addEventListener('click', proximaImagem)
    botaoVol.addEventListener('click', voltarImagem)

