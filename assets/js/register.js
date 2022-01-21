let cleave = new Cleave('#phone', {
    delimiters: [' '],
    blocks: [2, 2, 2, 2, 2]
});
typeOfVisitor.onchange = () => {
    if (typeOfVisitor.value == 'exposant') {
        exponentsContainer.classList.remove('d-none');
        exponentsImageContainer.classList.remove('d-none');
    } else {
        exponentsContainer.classList.add('d-none');
        exponentsImageContainer.classList.add('d-none');
    }
}
lastname.onkeydown = () => {
    if (lastname.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        lastname.classList.remove('is-invalid');
        lastname.classList.add('is-valid');
    } else {
        lastnameErrors.innerText = 'Veuillez vérifier votre nom de famille';
        lastname.classList.remove('is-valid');
        lastname.classList.add('is-invalid');
    }
}
lastname.onchange = () => {
    if (lastname.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        lastname.classList.remove('is-invalid');
        lastname.classList.add('is-valid');
    } else {
        lastnameErrors.innerText = 'Veuillez vérifier votre nom de famille';
        lastname.classList.remove('is-valid');
        lastname.classList.add('is-invalid');
    }
}
firstname.onkeydown = () => {
    if (firstname.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        firstname.classList.remove('is-invalid');
        firstname.classList.add('is-valid');
    } else {
        firstnameErrors.innerText = 'Veuillez vérifier votre prénom';
        firstname.classList.remove('is-valid');
        firstname.classList.add('is-invalid');
    }
}
firstname.onchange = () => {
    if (firstname.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        firstname.classList.remove('is-invalid');
        firstname.classList.add('is-valid');
    } else {
        firstnameErrors.innerText = 'Veuillez vérifier votre prénom';
        firstname.classList.remove('is-valid');
        firstname.classList.add('is-invalid');
    }
}

exponentsName.onkeydown = () => {
    if (exponentsName.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        exponentsName.classList.remove('is-invalid');
        exponentsName.classList.add('is-valid');
    } else {
        exponentsNameErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        exponentsName.classList.remove('is-valid');
        exponentsName.classList.add('is-invalid');
    }
}
exponentsName.onchange = () => {
    if (exponentsName.value.match(/^([A-Z]{1}){1}([a-z-_.]+){1}$/)) {
        exponentsName.classList.remove('is-invalid');
        exponentsName.classList.add('is-valid');
    } else {
        exponentsNameErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        exponentsName.classList.remove('is-valid');
        exponentsName.classList.add('is-invalid');
    }
}
email.onkeydown = () => {
    if (email.value.match(/^([0-9A-Za-z-_.]+){1}([@]{1}){1}([a-z.]+){1}([a-z]{2,3}){1}$/)) {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
    } else {
        emailErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        email.classList.remove('is-valid');
        email.classList.add('is-invalid');
    }
}
email.onchange = () => {
    if (email.value.match(/^([0-9A-Za-z-_.]+){1}([@]{1}){1}([a-z.]+){1}([a-z]{2,3}){1}$/)) {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
    } else {
        emailErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        email.classList.remove('is-valid');
        email.classList.add('is-invalid');
    }
}
phone.onchange = () => {
    if (phone.value.match(/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/)) {
        phone.classList.remove('is-invalid');
        phone.classList.add('is-valid');
    } else {
        phoneErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        phone.classList.remove('is-valid');
        phone.classList.add('is-invalid');
    }
}
phone.onkeydown = () => {
    if (phone.value.match(/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/)) {
        phone.classList.remove('is-invalid');
        phone.classList.add('is-valid');
    } else {
        phoneErrors.innerText = 'Veuillez vérifier votre nom d\'exposant';
        phone.classList.remove('is-valid');
        phone.classList.add('is-invalid');
    }
}