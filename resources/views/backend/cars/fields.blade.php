<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/cars.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_type_id', __('models/cars.fields.car_type_id').':') !!}
    {!! Form::select('car_type_id', $car_typeItems, $car_typeItems, ['class' => 'form-control']) !!}
</div>

<!-- Max Pax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_pax', __('models/cars.fields.max_pax').':') !!}
    {!! Form::number('max_pax', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Luggage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_luggage', __('models/cars.fields.max_luggage').':') !!}
    {!! Form::number('max_luggage', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/cars.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Upload Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label for="images">{{ __('models/cars.fields.image')}}</label>
    @if(isset($car))
    @foreach($car->images as $image)
            <img src="{{ asset('images/thumbs/'.$image->url) }}" alt="{{$image->url}}">
            <a id="deleteImage" class="btn btn-sm btn-outline-danger py-0" data-id="{{ $image->id }}" >Delete</a>
    @endforeach
@section('script')
<script>
    $(document).ready(function () {
        console.log( "ready!" );
        $("body").on("click","#deleteImage",function(e){

            if(!confirm("Delete Image?")) {
                return false;
            }

            e.preventDefault();
            var id = $(this).data("id");
            var url = e.target;

            $.ajax(
                {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/admin/images/"+id,
                    type: 'DELETE',
                    data: {
                        id: id
                    },
                    success: function(data){
                        if(data.success == true){ // if true (1)
                            setTimeout(function(){// wait for 5 secs(2)
                                location.reload(); // then reload the page.(3)
                            }, 500);
                        }
                    }
                })
            return false;
        });


    });
</script>
@endsection

    @endif

    <input name="images[]" type="file" multiple>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.cars.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

