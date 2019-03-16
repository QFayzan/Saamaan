<div class="modal fade" id="Modal{{$order->id}}" tabindex="-1" role="dialog"
     aria-labelledby="Modal" aria-hidden="true">
    <form method="POST" action="{{ route('details.store',$order->id)}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Some general information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="name">Brief explanation of order</label>
                        <input id="name" type="text" name="name" class="form-control {{
                                                    $errors->has('name') ? "is-invalid" : "" }}"
                               value="{{ old('name') }}"
                               placeholder="name">
                        @if($errors->has('name'))
                            <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity or number of items in the order</label>
                        <input id="quantity" type="text" name="quantity" class="form-control {{ $errors->has('quantity') ?
                        "is-invalid" : "" }}" value="{{ old('quantity') }}" placeholder="quantity">
                        @if($errors->has('quantity'))
                            <strong class="invalid-feedback">{{ $errors->first('quantity') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Category </label>
                        <select name="category" id="category" class="form-control {{ $errors->has('dimension') ? "is-invalid"
                        : "" }}">
                            <option disabled selected>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category'))
                            <strong class="invalid-feedback">{{ $errors->first('category') }}</strong>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>