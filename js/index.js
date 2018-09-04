$(document).ready(function() {

    loadElement('#offer-target', './../fragments/komis.html')

    $("#offer-menu-autodetailing").on('click', (e) => {
        e.preventDefault();
        loadElement('#offer-target', './../fragments/autodetailing.html');
    });

    $("#offer-menu-komis").on('click', (e) => {
        e.preventDefault();
        loadElement('#offer-target', './../fragments/komis.html')
    });

    function loadElement(target, template) {
        $(target).load(template)
    }

})