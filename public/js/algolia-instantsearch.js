const searchClient2 = algoliasearch('XQCQWWLR66', '262eaf1360292f847a096bee74a8ab85');


const search = instantsearch({
    indexName: 'products',
    searchClient: searchClient2,
    routing: {
        router: instantsearch.routers.history(),
        stateMapping: instantsearch.stateMappings.simple(),
    },
});

search.addWidgets([
    instantsearch.widgets.searchBox({
        container: '#search-box',
    }),

    instantsearch.widgets.hits({
        container: '#hits',
        templates:{
            empty: 'No Results',
            item: function(item) {
                return `
                    <a href='${window.location.origin}/shop/${item.slug}'>
                        <div class='row'>
                            <div class='col-xs-3'>
                                <img style='margin-left:1em' class='image-center' src='${window.location.origin}/storage/${item.image}' height='80px' width='80px'>
                            </div>
                            <div class='col-xs-8 offset-1 result-head'>
                                <div>${item.name}</div>
                                <div>${item.details}</div>
                                <div>${item.price}</div>
                            </div>
                        </div>
                    </a>
                `
            }
        }
    }),
    instantsearch.widgets.pagination({
        container: '#pagination',
    }),
    instantsearch.widgets.stats({
        container: '#stats',
    }),
    instantsearch.widgets.refinementList({
        container: '#refinement-list',
        attribute: 'category',
    })
]);

search.start();