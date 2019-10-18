@if (session()->has('success'))
    <div class="alert alert-success">
        <li>{{ session()->get('success') }}</li>
    </div>
@endif
    
@if (session()->has('error'))
    <div class="alert alert-danger">
        <li>{{ session()->get('error') }}</li>
    </div>
@endif