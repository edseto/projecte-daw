import Shufflejs from 'shufflejs'

const container = document.querySelector('#rooms-list')
let filters = {}

if (container) {
    const shuffle = new Shufflejs(container, {
        itemSelector: '.col',
    })

    jQuery('input[name="shuffle-filter"]').on('change', function (ev) {
        const input = ev.currentTarget;
        if (input.checked) {
            document.querySelector('.active').classList.remove('active')
            input.parentElement.classList.add('active')
            shuffle.filter(input.value);
        }
    });
}


