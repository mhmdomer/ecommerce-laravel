const searchClient = algoliasearch('XQCQWWLR66', '262eaf1360292f847a096bee74a8ab85');
var index = searchClient.initIndex('products')
var enterPressed = false
autocomplete('#searchbox',
    { hint : false }, {
        source : autocomplete.sources.hits(index, {hitsPerPage: 10}),
        displayKey : 'name',
        templates : {
            suggestion: function(suggestion) {
                const markup = `
                    <div class='algolia-result' style='display:flex'>
                        <img src='${window.location.origin}/storage/${suggestion.image}' width='40px' height='40px'>
                        <span style='margin-left:3em'>${suggestion._highlightResult.name.value}</span>
                        <span>$${suggestion.price}</span>
                    </div>
                    <div>
                        <span>${suggestion._highlightResult.details.value}</span>
                    </div>
                    <hr style='margin-bottom:0'>
                `;
                return markup;
            },
            empty: function(result) {
                return 'sorry we did not find any result for ' + result.query;
            }
        }
    }
).on('autocomplete:selected', function(event, suggestion, dataset) {
    window.location.href = window.location.origin + '/shop/' + suggestion.slug;
    enterPressed = true;
}).on('keydown', function(event) {
    if(event.keyCode == 13 && !enterPressed) {
        // populate the algolia instantsearch box with the query by adding it in the url
        // ( we set the routing in the algolia instantsearch file )
        window.location.href = window.location.origin + '/search-algolia?products%5Bquery%5D=' + $('#searchbox').val()
    }
})