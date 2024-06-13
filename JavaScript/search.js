function searchNews() {
    var searchText = document.getElementById('searchInput').value.toLowerCase();

    var cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
        var title = card.querySelector('#news-title').textContent.toLowerCase();
        var source = card.querySelector('#news-source').textContent.toLowerCase();

        if (title.includes(searchText) || source.includes(searchText)) {
            card.style.display = 'block';
            card.classList.add('search-result');
        } else {
            card.style.display = 'none';
            card.classList.remove('search-result');
        }
    });
}