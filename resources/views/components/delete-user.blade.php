<form method="POST" action="/users/delete/{{$id}}">
    @csrf
    <button type="submit" class="btn btn-primary rounded mx-2">
        <i class="bi bi-trash-fill"></i>
    </button>
</form>