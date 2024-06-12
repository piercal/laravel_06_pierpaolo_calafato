<x-app>

<div class="row">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
    @endif
    <div class="col-12">
    <form method="POST" action="{{route('ticket.send')}}">
  @csrf
    <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="name">
  </div>

  <div class="mb-3">
    <label class="form-label">Nome e Cognome</label>
    <input type="text" class="form-control" name="email">
  </div>

  <div class="form-floating">
  <textarea class="form-control" style="height: 100px" name="description"></textarea>
  <label for="floatingTextarea2">Descrivi il tuo problema</label>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

</div>

</x-app>