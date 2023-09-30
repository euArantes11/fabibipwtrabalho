const input = document.querySelector('cpf')

cpf.addEventListener('keypress', () => {
    let inputLength = cpf.value.length

    
    if (inputLength === 3 || inputLength === 7) {
        cpf.value += '.'
    }else if (inputLength == 11) {
        cpf.value += '-'
    }
    })