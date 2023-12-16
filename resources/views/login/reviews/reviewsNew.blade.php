@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/reviewsNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">

                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />




                <div class="form-group row">
                <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                <div class="col-sm-6">
                  <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</form>


<script type="text/javascript">
    jQuery(document).ready(function(){

        $('.phone').mask('+0 (000) 000-00-00', {placeholder: "+ (__) _  __"});

    });
</script>


@endsection
