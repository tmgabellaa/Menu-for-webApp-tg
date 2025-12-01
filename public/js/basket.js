
document.addEventListener('DOMContentLoaded', () => {


    const btns = document.querySelectorAll('.plus');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            const idBtnPlus = btn.dataset.id;
            const btnMinus = document.getElementById(idBtnPlus);
            const quantity = document.getElementById('quantity-' + idBtnPlus)

            if(btnMinus.hasAttribute('hidden')){
                btnMinus.removeAttribute('hidden');
            }

            fetch('/basket', {
                method: 'POST',
                headers: {'content-type': 'application/json'},
                body: JSON.stringify({id: idBtnPlus, checking: 'Misha228'})
            })
                .then(response => response.json())
                .then(data => {
                    quantity.textContent = data['quantity'];
                })
        });
    });



});