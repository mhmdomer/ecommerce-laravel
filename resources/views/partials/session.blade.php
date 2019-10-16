@if (session()->has('success'))
    <div class="alert alert-success">
        <li>{{ session()->get('success') }}</li>
    </div>
@endif