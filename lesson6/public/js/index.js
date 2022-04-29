let buttons = document.querySelectorAll('.buy');
buttons.forEach((e) => {
    e.addEventListener('click', () => {
        let id = e.getAttribute('data-id');
        (async () => {
            const response = await fetch('/basket/add/?id=' + id)
            const answer = await response.json();
            console.log(answer);
        })()
    })
})