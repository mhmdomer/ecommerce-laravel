<footer class="bg-dark">
    <div class="container bg-dark">
        <div class="footer">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="footer-link">Privacy policy</a><br>
                    <a href="#" class="footer-link">Term and conditions</a><br>
                </div>
                <div class="col-md-4">
                    <h3>
                        Welcome to the site
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, assumenda. Culpa, libero.</p>
                </div>
                <div class="col-md-4">
                    <h3>
                        Contact:
                    </h3>
                    <p>Phone: +249126545060</p>
                    <p>Email: mohammedomer789@gmail.com</p>
                    <p>Facebook: <a href="https://facebook.com/mohammedomer789">Mohammed Omer</a></p>
                    <p>Github: <a href="https://github.com/m7md3omer">Mohammed Omer</a></p>
                </div>
            </div>
        </div>
        <p>copyright &copy; Mohammed Omer Ali - All rights reserved 2019</p>
    </div>
</footer>
<style>
    .algolia-autocomplete {
        width: 100%;
      }
      .algolia-autocomplete .aa-input, .algolia-autocomplete .aa-hint {
        width: 100%;
      }
      .algolia-autocomplete .aa-hint {
        color: #999;
      }
      .algolia-autocomplete .aa-dropdown-menu {
        width: 100%;
        background-color: #fff;
        border: 1px solid #999;
        border-top: none;
      }
      .algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
        cursor: pointer;
        padding: 5px 4px;
      }
      .algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
        background-color: #B2D7FF;
      }
      .algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
        font-weight: bold;
        font-style: normal;
      }
</style>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.35.0/dist/algoliasearchLite.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>

const searchClient = algoliasearch('XQCQWWLR66', '262eaf1360292f847a096bee74a8ab85');
var index = searchClient.initIndex('products')
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
})

</script>