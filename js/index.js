$(document).ready(function () {
    loadElement('#offer-target', './../fragments/komis.html');
    loadElement("#services-list-info-target", `./../fragments/services/repair.html`);

    $("#offer-menu-autodetailing").on('click', (e) => {
        e.preventDefault();
        loadElement('#offer-target', './../fragments/autodetailing.html');
    });

    $("#offer-menu-komis").on('click', (e) => {
        e.preventDefault();
        loadElement('#offer-target', './../fragments/komis.html')
    });

    $("#services-list-info a").on('click', (e) => {
        e.preventDefault();
        console.log(`./../fragments/services/${e.target.dataset.name}.html`)
        loadElement("#services-list-info-target", `./../fragments/services/${e.target.dataset.name}.html`);
    })

    function loadElement(target, template) {
        $(target).load(template)
    }

})