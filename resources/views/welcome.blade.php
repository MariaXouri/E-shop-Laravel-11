<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<!-- <h1>Hi </h1> -->

<link href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<div class=new id="app">
    <ais-index app-id="WXBSOSIZJ3" api-key="82652ef9ec46d65dfc92a41beb59312f" index-name="products">
        <div class="search-results-container-algolia">
            <div>
                <h2>Search</h2>
                <ais-search-box></ais-search-box>

                <ais-stats></ais-stats>

                <div class="spacer"></div>
                <h2>Jewels</h2>
                <ais-refinement-list attribute-name="jewels" :sort-by="['name:asc']"></ais-refinement-list>
            </div>

            <div>
                <ais-results>
                    <template slot-scope="{ result }">
                        <div>
                            <a :href="`/jewels">
                                <div class="instantsearch-result">
                                    <div>

                                    </div>
                                    <div>
                                        <div class="result-title">
                                            <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                                        </div>
                                        <div class="result-details">
                                            <ais-highlight :result="result" attribute-name="details"></ais-highlight>
                                        </div>
                                        <div class="result-price">
                                            $@{{ (result.price / 100).toFixed(2) }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        </div>
                    </template>
                </ais-results>
                <ais-pagination></ais-pagination>
            </div>
        </div> <!-- end search-results-container-algolia -->
    </ais-index>
    <my-search />
</div>

</html>