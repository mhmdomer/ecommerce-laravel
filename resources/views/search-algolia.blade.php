@extends('layouts.app')
@section('title', 'Search')
@section('stylesheet')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/reset-min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css">

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3 class="lead">Search:</h3>
            <div class="" id="search-box" style="margin-bottom:2em">
        
            </div>
            <h3 class="lead">Categories:</h3>
            <div id="refinement-list">
        
            </div>
        </div>
        <div class="col-md-7 offset-md-1">
            <div id="stats">
        
            </div>
            <div class="" id="hits">
        
            </div>
            <div id="pagination">
        
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.35.0/dist/algoliasearchLite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.0.0/dist/instantsearch.production.min.js" ></script>
<script src="js/algolia-instantsearch.js"></script>

@endsection