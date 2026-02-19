
document.addEventListener('DOMContentLoaded', () => {


    const btns = document.querySelectorAll('.plus');
    const btnsMinus = document.querySelectorAll('.minus');

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
                body: JSON.stringify({id: idBtnPlus})
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    quantity.textContent = data['quantity'];
                })
        });

        btnsMinus.forEach(btn => {
          btn.addEventListener('click', () => {
            
          });
        });




    });



});