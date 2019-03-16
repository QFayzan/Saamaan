<div class="modal fade" id="Edit-Modal{{$detail->id}}" tabindex="-1" role="dialog"
     aria-labelledby="Modal" aria-hidden="true">
    <form method="POST" action="{{ route('details.update',$detail->id)}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Some general
                        information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Brief explanation of order</label>
                        <input id="name" type="text" name="name" class="form-control {{
                                                    $errors->has('name') ? "is-invalid" : "" }}"
                               value="{{ $detail->name }}"
                               placeholder="name">
                        @if($errors->has('name'))
                            <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity or number of items in the
                            order</label>
                        <input id="quantity" type="text" name="quantity" class="form-control {{ $errors->has('quantity') ?
                        "is-invalid" : "" }}" value="{{ $detail->quantity }}" placeholder="quantity">
                        @if($errors->has('quantity'))
                            <strong class="invalid-feedback">{{ $errors->first('quantity') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="category">Category </label>
                        <select name="category" id="category" class="form-control {{ $errors->has('dimension') ? "is-invalid"
                        : "" }}">
                            @foreach($categories as $category)
                                <option value="{{$category->name}}" {{ $detail->category == $category->name ? 'selected' : ""}}>
                                    {{ $category->name }}
                                </option>
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