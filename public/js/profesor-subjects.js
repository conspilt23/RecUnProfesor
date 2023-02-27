const search = document.getElementById('filter_search_table');
const table_rows = document.querySelectorAll('.tr_count');
const table_headings = document.querySelectorAll('.header_table');
var hideCount;

search.addEventListener('input', searchTable);

function searchTable(){
    hideCount = 0; // Resetear el contador de elementos ocultos
    
    table_rows.forEach( (row,i) => {
        let table_data = row.textContent.trim().normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "").toLowerCase(),
        search_data = search.value.trim().normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "").toLowerCase();

        if (table_data.indexOf(search_data) < 0) {
            row.classList.add('hide');
            hideCount++;
        } else {
            row.classList.remove('hide');
        }

        row.style.setProperty('--delay', i/25 + 's');

    });
    if (hideCount === table_rows.length) {
        notF.style.display = 'block';
    } else {
        notF.style.display = 'none';
    }
}

table_headings.forEach( (head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('header_activated'));
        head.classList.add('header_activated');

        document.querySelectorAll('td').forEach(td => td.classList.remove('header_activated'))
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('header_activated')
        });
        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortable(i, sort_asc);
    }
});

function  sortable(column, sort_asc){
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
        second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1)
    })
    .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}