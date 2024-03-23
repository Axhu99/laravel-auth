const deleForms = document.querySelectorAll('.delete-form');
deleForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();

        const hasConfirmed = confirm('Vuoi eleminare questo progetto?');
        if (hasConfirmed) form.submit();
    })
})