    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function alert(type, msg)
        {
            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';

            let element = document.createElement('div');
            element.innerHTML = `
                <div class="alert ${bs_class} alert-dismissible fade show custom-alerts" role="alert">
                    <strong class="me-3">${msg}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;

            document.body.append(element);

            setTimeout(() => {
                element.remove();
            }, 3000);
            function removeAlert(){
                document.getElementsByClassName('alerts')[0].remove();
            };
        }

function setActive() {
    let navbar = document.getElementById('dashboard-menu');
    let a_tags = navbar.querySelectorAll('a');

    let currentPage = window.location.pathname.split('/').pop().split('?')[0];

    a_tags.forEach(link => {
        link.classList.remove('active');

        let linkPage = link.getAttribute('href').split('/').pop();

        if (linkPage === currentPage) {
            link.classList.add('active');
        }
    });
}

setActive();
    </script>