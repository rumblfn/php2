let buttons = document.querySelectorAll('.buy');
buttons.forEach((e) => {
    e.addEventListener('click', () => {
        let id = e.getAttribute('data-id');
        (async () => {
            const response = await fetch('/basket/add/?id=' + id)
            const answer = await response.json();
            document.getElementById('count').innerText = answer.count;
        })()
    })
})

let buttons_rem = document.querySelectorAll('.remove');
buttons_rem.forEach((e) => {
    e.addEventListener('click', () => {
        let id = e.getAttribute('data-id');
        (async () => {
            const response = await fetch('/basket/remove/?id=' + id)
            const answer = await response.json();
            console.log(answer);
            document.getElementById('count').innerText = answer.count;
            document.getElementById(id).remove();
        })()
    })
})

let buttons_order = document.querySelectorAll('.removeOrder');
buttons_order.forEach((e) => {
    e.addEventListener('click', () => {
        let id = e.getAttribute('data-id');
        (async () => {
            const response = await fetch('/order/remove/?id=' + id)
            const answer = await response.json();
            console.log(answer);
            document.getElementById('orderCount').innerText = answer.count;
            document.getElementById(id).remove();
        })()
    })
})

let buttons_order_admin = document.querySelectorAll('.removeOrderAdmin');
buttons_order_admin.forEach((e) => {
    e.addEventListener('click', () => {
        let id = e.getAttribute('data-id');
        (async () => {
            const response = await fetch('/order/remove/?id=' + id)
            const answer = await response.json();
            console.log(answer);
            document.getElementById(id).remove();
        })()
    })
})