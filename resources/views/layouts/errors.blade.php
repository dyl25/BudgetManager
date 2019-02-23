<div class="alert alert-danger" role="alert">
@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@elseif(session('errorMsg'))
    <p>{{ errorMsg }}</p>
@endif
</div>