document.addEventListener('DOMContentLoaded', () => {

    let katakunci = document.getElementById('kataKunci');
    let cari = document.getElementById('cari');
    let dataResep = document.getElementById('dataresep');
    var ajax = new XMLHttpRequest();

    const cariResep = () => {
        ajax.onload = function() {
            dataResep.innerHTML = this.responseText

            $(function() {
                $('.rating_2').barrating({
                    theme: 'fontawesome-stars',
                    readonly: true,

                });
            });

        }

        ajax.open('GET', 'dataresep.php?page=' + page + '&cariResep=' + katakunci.value, true);
        ajax.send();
    }

    cariResep()


    katakunci.addEventListener('keyup', cariResep);
})