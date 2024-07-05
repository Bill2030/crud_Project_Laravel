<x-layout>
    <div class="container">
   <h1>New Product</h1>
   @if ($errors->any())
   <ul>
      @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
      @endforeach
   </ul>
   @endif
   <form action="{{ route('products.store') }}" method="POST" >
    @csrf
   <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <button class="btn btn-success mt-3">Save</button>
</form>
</div>
</x-layout>
